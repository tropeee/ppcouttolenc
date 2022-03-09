<?php

namespace App\Http\Controllers\Package;

use App\Task;
use App\User;
use App\Ticket;
use App\Package;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiController;

class PackageUserTicketController extends ApiController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Package $package, User $user)
    {
        if(!$user->isClient()){
            return $this->errorResponse("El usuario especificado no es un cliente",422);
        }

        $f_min = Carbon::now()->addDays($package->dias_habiles)->toDateString();

        $rules = [
            'fecha' => 'date|after_or_equal:' . $f_min,
            'items' => 'array',
            'items.*' => 'integer|min:1|exists:services,id',
            'cuestionario' => 'required|string',
            'foto' => 'image',
            'extraFile' => 'file'
        ];
        
        $this->validate($request, $rules);
        
        if ($request->has('items')) {
            foreach($request->items as $it){
                $auxit = Service::findOrFail($it);
                if($auxit->package_id != $package->id){
                    return $this->errorResponse("El servicio especificado no pertenece a " . $package->nombre,422);
                }
            }
        }
        
        if ( !$package->isIndividual() ) {
            $obligatorio = $package->services()->where('force_individual',Service::FORCE_FALSE)->get()->pluck('id')->all();
            $opcionales = $package->services()->where('force_individual',Service::FORCE_TRUE)->get()->pluck('id')->all();
        } else {
            $obligatorio = [];
            $opcionales = $package->services->pluck('id')->all();
        }
        
        $cuestionario = $request->cuestionario;
        if($request->has('foto')){
            $foto = $request->foto->store('img');
            $cuestionario = substr($cuestionario,0,-1) . ',"foto":"' . $foto . '"}';
        }
        if($request->has('extraFile')){
            $extraFile = $request->extraFile->store('doc');
            $cuestionario = substr($cuestionario,0,-1) . ',"extraFile":"' . $extraFile . '"}';
        }

        $tareas_adicionales = [];
        if ($request->has('items')) {
            $collection = collect( $opcionales );
            $tareas_adicionales = $collection->intersect( $request->items )->all();
        }
        
        $campos['status'] = Ticket::TICKET_RECIBIDO;
        $campos['fecha'] = $request->fecha;
        $campos['cuestionario'] = $cuestionario;
        
        $campos['user_id'] = $user->id;
        $campos['package_id'] = $package->id;

        
        $tareas = array_merge($obligatorio,$tareas_adicionales);
        
        $areas = Service::whereIn('id',$tareas)
            ->with('item.area')
            ->get()
            ->pluck('item.area')
            //->pluck('id')
            ->all();
            
        $equipo = [];
        $aux_equipo = [];
        
        foreach ($areas as $ar) {
            $id = $ar['id'];
            if( !isset($aux_equipo[$id]) ){
                $aux_equipo[$id] = User::where('area_id',$id)->where('tipo',User::USUARIO_EQUIPO)->get()->random()->id;
            }
            $equipo[] = $aux_equipo[$id];
        }
        
        $ticket = DB::transaction(function () use ($campos, $tareas, $equipo){

            $ticket = Ticket::create( $campos );
            
            for ($i=0; $i < count($tareas) ; $i++) { 
                $new = Task::create([
                    'ticket_id' => $ticket->id,
                    'service_id' => $tareas[$i],
                    'user_id' => $equipo[$i]
                ]);
            }

            return $ticket;
        });
        
        return $this->showOne($ticket, 201);
    }
}
