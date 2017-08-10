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
    	/*$mollie = new Mollie_API_Client;
		$mollie->setApiKey("test_nSKQvJBbavydxNuQRwbWH2kDcdQc7v");*/
		$idPricing = Session::get('id_pricing');
		$design_pr = "";
		$months_pa = "";
		$total     = "";
		if($idPricing == "1"){
			$design_pr = "0";
			$months_pa = "99";
			$total     = "99";
		}else{
			$design_pr = "100";
			$months_pa = "199";
			$total     = "299";
		}
        return view('home.pricing',  ['design_pr' => $design_pr, 'months_pa' => $months_pa, 'total' => $total]);
    }
}