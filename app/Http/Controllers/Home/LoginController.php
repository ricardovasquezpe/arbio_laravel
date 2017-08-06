<?php 

namespace App\Http\Controllers\Home;

use Config;
use Session;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index()
    {
        $remember = (Session::get('remember') ==  "1") ? "checked" : "";
        $username = "";
        $password = "";
        if($remember == "checked"){
            $username = Session::get('username_remember');
            $password = Session::get('password_remember');
        }

        return view('home.login',  ['username' => $username, 'password' => $password, 'remember' => $remember]);
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $client = new Client();
        $res = $client->post(Config::get('constants.api_config.base').Config::get('constants.api_methods.login_api'), [
            'json' => ['email'    => $username,
                       'password' => $password]
        ]);
        $msj  = "";
        $body = json_decode($res->getBody());
        if(!$body->success){
            $msj = $body->error->message;
        }else{
            $data['url'] = "index.php";
            Session::set('token', $body->data->api_token);
            $remember = $_POST['remember'];
            if($remember == "1"){
                Session::set('username_remember', $username);
                Session::set('password_remember', $password);
            }else{
                Session::forget('username_remember');
                Session::forget('password_remember');
            }
            Session::set('remember', $remember);
        }
        $data['msj']    = $msj;
        $data['status'] = $body->success;
        echo json_encode(array_map('utf8_encode', $data));
    }
}