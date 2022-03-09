<?php

namespace App\Http\Controllers;

use App\Mail\UserLoginData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function index(){
        return view('home');
    }

    public function getTokens(){
        return view('home.personal-tokens');
    }

    public function getClients(){
        return view('home.personal-clients');
    }

    public function getAuthorizedClients(){
        return view('home.authorized-clients');
    }

    public function sendMail(){
        $destinatarios = [
            ['name'=>'L.D. GABRIEL GALLEGOS GARCÍA', 'email'=>'presidencia@tenancingo.gob.mx', 'contra'=>'EBZzmmPkmW'],
            ['name'=>'L.C.P Y A.P. FRANCISCO ZUÑIGA BARRANCO', 'email'=>'administracion@tenancingo.gob.mx', 'contra'=>'n3LEpED1vQ'],
            ['name'=>'PROFR. ÁNGEL MILLÁN MÉRIDA', 'email'=>'educacion.cultura@tenancingo.gob.mx', 'contra'=>'ue45sSqruL'],
            ['name'=>'LIC. ALEJANDRO DEL VALLE DÍAZ', 'email'=>'bienestar.social@tenancingo.gob.mx', 'contra'=>'E5niP1fWfI'],
            ['name'=>'LIC. JORGE MEJÍA RIVERA', 'email'=>'secretaria.tecnica@tenancingo.gob.mx', 'contra'=>'CjF5k4SXWO'],
            ['name'=>'MTRA. IRMA GONZÁLEZ BECERRA', 'email'=>'tesoreria@tenancingo.gob.mx', 'contra'=>'8vtGgldYsH'],
            ['name'=>'L.D. JULIO CÉSAR LÓPEZ VÁSQUEZ', 'email'=>'secretaria.ayuntamiento@tenancingo.gob.mx', 'contra'=>'UdrgsWqP2E'],
            ['name'=>'ARQ. JAVIER SALDAÑA ARRIAGA', 'email'=>'desarrollo.urbano@tenancingo.gob.mx', 'contra'=>'f1M97wjI9E'],
            ['name'=>'L.D. ROLANDO MORENO ESQUIVEL', 'email'=>'consejeria.juridica@tenancingo.gob.mx', 'contra'=>'Z7ZWxhI3eb'],
            ['name'=>'ING. HÉCTOR MONTOYA HERNÁNDEZ', 'email'=>'desarrollo.agropecuario@tenancingo.gob.mx', 'contra'=>'1bgEkYYvmP'],
            ['name'=>'LIC. GENARO RAMÍREZ CEDILLO', 'email'=>'seguridad.publica@tenancingo.gob.mx', 'contra'=>'WbKRK8o0Cy'],
            ['name'=>'C. ÁNGEL GÓMEZ AGUILAR', 'email'=>'servicios.publicos@tenancingo.gob.mx', 'contra'=>'U6PzlMddFQ'],
            ['name'=>'L.A. VLADIMIR RAMÍREZ BECERRIL', 'email'=>'secretaria.particular@tenancingo.gob.mx', 'contra'=>'I2kGIc3dbs'],
            ['name'=>'MTRO. FRANCISCO JAVIER SÁNCHEZ PALERMO', 'email'=>'ecologia@tenancingo.gob.mx', 'contra'=>'zr6vcTEib3'],
            ['name'=>'ARQ. ARTURO GARDUÑO LÓPEZ', 'email'=>'obras.publicas@tenancingo.gob.mx', 'contra'=>'0lDSg6aZpS'],
            ['name'=>'L.C.I. ANA ROSA LÓPEZ BRINGAS', 'email'=>'desarrollo.economico@tenancingo.gob.mx', 'contra'=>'B3HhimsJnR'],
            ['name'=>'LIC. CIRILO LAGUNAS AVILEZ', 'email'=>'gobernacion@tenancingo.gob.mx', 'contra'=>'oLB4AmNCN5'],
            ['name'=>'LIC. VÍCTOR HUGO MADIN ULLOA', 'email'=>'contraloria@tenancingo.gob.mx', 'contra'=>'0iK64rVhPY'],
            ['name'=>'RENE SOTO', 'email'=>'rene_mario@hotmail.com', 'contra'=>'password'],
        ];
        foreach ($destinatarios as $d) {
            $user = $d;
            retry(5, function() use ($user){ 
                Mail::to($user['email'])->send(new UserLoginData($user));
            }, 200);
        }
    }
}
