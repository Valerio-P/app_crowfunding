<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Laravel\Cashier\Exceptions\IncompletePayment;

class StripeController extends Controller
{

    public function create()
    {

        $user = Auth::user();

        $stripeCustomer = $user->createOrGetStripeCustomer();

        return $stripeCustomer;
    }

    public function customerMethods()
    {

        $user = Auth::user();

        $card_methods = $user->paymentMethods();

        $sepa_methods = $user->paymentMethods('sepa_debit');

        return response()->json(['card' => $card_methods, 'sepa' => $sepa_methods]);
    }

    public function createPaymentIntent()
    {

        $user = Auth::user();

        $paymentIntent = $user->createSetupIntent([
            'payment_method_types' => ['sepa_debit', 'card'],
        ]);

        return response()->json(['intent' => $paymentIntent]);
    }

    public function addPaymentMethod(Request $request)
    {

        $user = Auth::user();

        $new_payment_method = $user->addPaymentMethod($request->payment_method_id);

        return $new_payment_method;
    }
}
