<?php

namespace App\Payment;

interface AuthInterface
{
    public function getSeed();
    public function getNonce();
    public function getTrankey($nonce, $seed);
}