<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::all();
        return view('home', compact('user'));
    }
    // public function subscribe_process(Request $request)
    // {
    //     try {
    //         Stripe::setApiKey(env('STRIPE_SECRET'));

    //         $id = Auth::id();//user_id取得
    //         $user = User::find($id);
    //         $user->newSubscription('main', 'prod_EsUTVhHHCuqxpV')->create($request->stripeToken);

    //         return back();
    //     } catch (\Exception $ex) {
    //         return $ex->getMessage();
    //     }

    // }
}
