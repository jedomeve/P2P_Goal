<?php

namespace App\Payment;

interface PaymentInterface
{
    public function pay($buyer, $payment);
}