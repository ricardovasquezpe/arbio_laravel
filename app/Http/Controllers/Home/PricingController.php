<?php 

namespace App\Http\Controllers\Home;

use Config;
use Session;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Mollie_API_Client;

class PricingController extends Controller {

    public function index()
    {
    	$mollie = new Mollie_API_Client;
		$mollie->setApiKey("test_nSKQvJBbavydxNuQRwbWH2kDcdQc7v");
        return view('home.pricing');
    }
}