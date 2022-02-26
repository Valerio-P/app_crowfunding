<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shakurov\Coinbase\Facades\Coinbase;

class CoinbaseController extends Controller
{
    public function create(Request $request)
    {

        $user = Auth::user();

        $charges = Coinbase::createCharge([
            'name' => 'Ricarica',
            'description' => 'Ricarica Account con crypto',
            'local_price' => [
                'amount' => $request->amount,
                'currency' => 'EUR',
            ],
            "metadata" => [
                "customer_id" => $user->id,
                "customer_name" => $user->name . " " . $user->surname
            ],
            'pricing_type' => 'fixed_price',
            "redirect_url" => "http://localhost:8000/",
            "cancel_url" => "http://localhost:8000/"
        ]);

        return $charges;
    }
}
