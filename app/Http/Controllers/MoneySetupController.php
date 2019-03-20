<?php
namespace App\Http\Controllers;
use URL;
use Input;
use Stripe;
use Session;
use App\User;
use Redirect;
use Validator;
use App\Client;
use App\Http\Requests;
use Stripe\Error\Card;
use App\Models\College;
use App\Models\Payment;
use App\Models\EventStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoneySetupController extends Controller
{
	 public function paymentStripe($type)
	 {
		
		if($type == "monthly")
			$fee=100;
		else if($type == "yearly")
			$fee=899;
		 return view('payment.stripe',compact('fee'));
		 
	 }
	public function postPaymentStripe(Request $request,$fee)
	 {

		if($fee){

			$client= Client::where('email',auth()->user()->email)->first();

			$client->premium = true;

			$client->save();

		}
		
        return redirect('/client');
        
	 }
}
