<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    public function index()
    {
        return view('home.login');
    }
}