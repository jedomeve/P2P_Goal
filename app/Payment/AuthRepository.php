<?php

namespace App\Payment;

class AuthRepository implements AuthInterface
{

    public function getSeed()
    {
        return date('c');
    }

    public function getNonce()
    {
        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }

        $nonceBase64 = base64_encode($nonce);

        $response = [
            'nonce' => $nonce,
            'nonceBase64' => $nonceBase64
        ];

        return $response;
    }

    public function getTrankey($nonce, $seed)
    {
        $secretKey = env('P2P_SECRETKEY');

        $trankey = base64_encode(sha1($nonce . $seed . $secretKey, true));

        return $trankey;
    }

    public function getAll(){

        $secretKey = env('P2P_SECRETKEY');
        $seed = date('c');

        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }

        $nonceBase64 = base64_encode($nonce);

        $trankey = base64_encode(sha1($nonce . $seed . $secretKey, true));

        return [
            'seed' => $secretKey,
            'nonce' => $nonce,
            'nonce64' => $nonceBase64,
            'trankey' => $trankey
        ];
    }
}