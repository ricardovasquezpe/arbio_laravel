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
        $client = new Client();
        $res = $client->post(Config::get('constants.api_config.base').Config::get('constants.api_methods.login_api'), [
            'json' => ['email'    => $_POST['username'],
                       'password' => $_POST['password']]
        ]);
        /*echo $res->getStatusCode();
        echo $res->getBody();*/
        echo json_encode(array_map('utf8_encode', $data));
    }
}