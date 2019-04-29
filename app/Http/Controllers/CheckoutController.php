<?php

namespace App\Http\Controllers;

use App\User;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
  public function subscribe_process(Request $request)
  {
    try{
      Stripe::setApiKey(env('STRIPE_SECRET'));
      // 単発に支払い
      // $customer = Customer::create(array(
      //     'email' => $request->stripeEmail,
      //     'source'  => $request->stripeToken
      // ));

      // $charge = Charge::create(array(
      //     'customer' => $customer->id,
      //     'amount'   => 540,
      //     'currency' => 'jpy'
      // ));
      // 顧客を作成
      
      // サブスクリプション
      $id = Auth::id();//user_id取得
      $user = User::find($id);
      $user->newSubscription('main', 'fanclube01')->create($request->stripeToken);
      return redirect('home');
  }catch(\Exception $ex){
    return $ex->getMessage();
  }
}
}
