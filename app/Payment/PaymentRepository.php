<?php

namespace App\Payment;

use Ixudra\Curl\Facades\Curl;

class PaymentRepository implements PaymentInterface
{

    protected $auth;

    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function pay($buyer, $payment)
    {
        $request_url = env('P2P_ENDPOINT') . "/api/session";

        $seed = $this->auth->getSeed();
        $nonce = $this->auth->getNonce();
        $tranKey = $this->auth->getTrankey($nonce['nonce'], $seed);


        $data = [
            'auth' => [
                'login' => env('P2P_LOGIN'),
                'seed' => $seed,
                'nonce' => $nonce['nonceBase64'],
                'trankey' => $tranKey
            ],
            'locale' => 'es_CO',
            'buyer' => $buyer,
            'payment' => $payment,
            'expiration' => date('c', strtotime('+2 days')),
            'returnUrl' => env('P2P_RETURN_URL'),
            'userAgent' => $_SERVER['HTTP_USER_AGENT'],
            'ipAddress' => $_SERVER['REMOTE_ADDR'],
        ];

        $request = Curl::to("https://test.placetopay.com/redirection/api/session")
            ->withData($data)
            ->returnResponseObject()
            ->asJson()
            ->post();

        dd($request, $data);
        //return $request;
    }

}