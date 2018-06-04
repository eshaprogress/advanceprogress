<?php

namespace App\Http\Controllers\Stripe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Invoice;
use \Stripe\Stripe;
use \Stripe\Customer;
use \Stripe\Charge;

class StripeController extends Controller
{
  //

  public function config()
  {
    $SECRET_KEY = config('services.stripe.secret');
    $PUBLISHABLE_KEY = config('services.stripe.key');

    Stripe::setApiKey($SECRET_KEY);

    return view('donate', ['stripe_key' => $PUBLISHABLE_KEY, 'result' => 0]);
  }

  public function charge(Request $request)
  {
    $token = $request->get('stripeToken');
    $amount = $request->get('amount-us') * 100;
    $email = $request->get('stripeEmail');

    $SECRET_KEY = config('services.stripe.secret_key');

    Stripe::setApiKey($SECRET_KEY);

    $customer = Customer::create(array(
      'email' => $email,
      'source' => $token
    ));

    $charge = Charge::create(array(
      'customer' => $customer->id,
      'amount' => $amount,
      'currency' => 'usd'
    ));

    //return view('donate', ['result' =>  'Successfully charged $50.00!'] );
    return view('confirm');
  }

}
