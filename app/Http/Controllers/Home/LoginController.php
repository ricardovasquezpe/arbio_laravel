<?php 

namespace App\Http\Controllers\Home;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index()
    {
    	/*$client = new Client();
		$res = $client->get('https://api.github.com/user', ['auth' =>  ['ricardo.vasquez.pe@gmail.com', 'pimienta123']]);
		echo $res->getStatusCode();
		echo $res->getBody();*/
        return view('home.login');
    }

    public function login(){

    }
}