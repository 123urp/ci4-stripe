<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Stripe;

class StripeController extends BaseController
{
    public function index()
    {
        $session = session();
        $users = $session->get('users');
        if(!isset($users)){
            helper(['url']);
            return redirect()->to('/signin');
        }else{
            return view('checkout');
        }
    }

    public function createCharge()
    {
        Stripe\Stripe::setApiKey(STRIPE_SECRET);
        
        Stripe\PaymentIntent::create([
            'amount' => 5 * 100,
            'currency' => 'usd',
            'payment_method_types' => ['card'],
          ]);       
        
        return redirect()->back()->with('success', 'Payment Successful!');
 
    }
    
}