<?php

namespace App\Http\Controllers;

use App\Payment\PaymentInterface;
use http\Client;
use Illuminate\Http\Request;

class PlaceToPayController extends Controller
{

    protected $paymentService;

    public function __construct(PaymentInterface $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function dataPayment(Request $request)
    {

        $client = new \App\Client();

        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->phone = $request->phone;
        $client->address = $request->street . " , " . $request->city. " CO";
        $client->email = $request->email;
        $client->document_value = $request->cc;

       $client->save();

        $buyer = [
            'document' => $client->document_value,
            'documentType' => 'CC',
            'name' => $client->name,
            'surname' => $client->lastname,
            'email' => $client->email,
            'address' => [
                'street' => $request->street,
                'country' => 'CO',
                'city' => $request->city
            ]
        ];

        $payment_info = [
            'reference' => "FC-1",
            'description' => 'Payment Info',
            'amount' => [
                'currency' => 'COP',
                'total' => (int)$request->price
            ],

        ];

        $payment = $this->paymentService->pay($buyer, $payment_info);
    }
}
