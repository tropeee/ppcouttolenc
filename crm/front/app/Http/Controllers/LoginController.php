<?php

namespace App\Http\Controllers;

use App\Auth;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\ClientException;

class LoginController extends Controller
{
    
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        $this->validate($request, $rules);

        $body['email'] = $request->email;
        $body['password'] = $request->password;
        
        if($request->has('remember_me')){
            $body['remember_me'] = $request->remember_me;
        }

        $client = new Client(['base_uri' => Auth::API_BASE_URL]);
        
        try{
            $req = $client->post('auth/login', [
                'form_params' => [
                    'email' => $request->email,
                    'password' => $request->password,
                    'remember_me' => ($request->has('remember_me'))? true : false
                ]
            ]);
            $res = json_decode( $req->getBody(), true);
            $result1 = $res['token'];
            $result2 = $res['user'];

            session(['token' => $result1]);
            session(['user' => $result2]);
            return redirect()->route('home');

        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            
            if( isset($res['error']) ){
                $result = $res['error'];
            } elseif( isset($res['message']) ){
                $result = $res['message'];
            } else{
                $result = $res['data'];
            }
            return back()->withInput()->with('bad',$result);
        }
    }

    public function logout(){
        $client = new Client(['base_uri' => Auth::API_BASE_URL]);
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            $req = $client->request('GET', 'auth/logout', [
                'headers' => $headers
            ]);

            $res = $res = json_decode( $req->getBody(), true);
            $data = $res['message'];
        } catch(ServerException $se){

        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
        }

        session()->forget(['token', 'user']);
        return redirect()->route('login');
    }

    private function makeAuthorizationToken(){
        $token_array = session('token','NULL');
        $token = (isset($token_array['access_token'])) ? $token_array['access_token'] : '';
        $type = (isset($token_array['token_type'])) ? $token_array['token_type'] : '';

        return $type . ' ' . $token;
    }
}
