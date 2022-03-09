<?php

namespace App\Http\Controllers;

use App\User;
use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $field = 'status';
        $param = Solicitud::STATUS_RESUELTO;
        $symbol = '<>';

        $tag_list = [
            Solicitud::STATUS_ATENDIDO,
            Solicitud::STATUS_RECIBIDO,
            Solicitud::STATUS_RESPONDIDO,
            Solicitud::STATUS_RESUELTO,
        ];

        $filter_list = ['all','favorite','important','finished'];

        if($request->has('tag') && in_array($request->tag, $tag_list)){
            $field = 'status';
            $param = $request->tag;
            $symbol = '=';
        } else if($request->has('filter') && in_array($request->filter, $filter_list)){
            $symbol = '=';
            switch($request->filter){
                case 'favorite':
                    $field = 'destacado';
                    $param = 1;
                    break;
                case 'important':
                    $field = 'importante';
                    $param = 1;
                    break;
                case 'finished':
                    $field = 'status';
                    $param = Solicitud::STATUS_RESUELTO;
                    break;
                default:
                    $symbol = '<>';
                    break;
            }
        }

        $data = Solicitud::where('user_id',Auth::id())
            ->where($field,$symbol,$param)
            ->orderBy('created_at','DESC')
            ->get();
        
        

        return view('customer.mail',compact('data'));
    }

    public function mailDetail($id, Request $request){
        $data = Solicitud::find($id);
        // dd( $data );
        return view('customer.mail-detail',compact('data'));
    }
}
