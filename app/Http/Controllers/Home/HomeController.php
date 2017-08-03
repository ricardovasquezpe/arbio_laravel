<?php 

namespace App\Http\Controllers\Home;

use Config;
use Session;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function index()
    {
        return view('home.index');
    }

    public function register(){
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];
        
        $client = new Client();
        $res = $client->post(Config::get('constants.api_config.base').Config::get('constants.api_methods.registration_api'), [
            'json' => ['firstName' => $firstname,
                       'lastName'  => $lastname,
                       'email'     => $email]
        ]);
        $msj  = "";
        $body = json_decode($res->getBody());
        if(!$body->success){
            $msj = $body->error->message;
        }else{
            $msj = "Thanks for join us";
        }
        $data['msj']    = $msj;
        $data['status'] = $body->success;
        echo json_encode(array_map('utf8_encode', $data));
    }
}