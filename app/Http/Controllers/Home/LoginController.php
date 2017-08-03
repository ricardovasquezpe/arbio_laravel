<?php 

namespace App\Http\Controllers\Home;

use Config;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index()
    {
        return view('home.login');
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $client = new Client();
        $res = $client->post(Config::get('constants.api_config.base').Config::get('constants.api_methods.login_api'), [
            'json' => ['email'    => $_POST['username'],
                       'password' => $_POST['password']]
        ]);
        $msj  = "";
        $body = json_decode($res->getBody());
        if(!$body->success){
            $msj = $body->error->message;
        }
        $data['msj']    = $msj;
        $data['status'] = $body->success;
        echo json_encode(array_map('utf8_encode', $data));
    }
}