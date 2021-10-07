<?php

namespace Paterns\Structural\Facade\Payments;
use Paterns\Structural\Facade\Payments\IPayment;

class PayCredit implements IPayment
{
    public function pay(int $amount): string
    {
        return "Credit : withdraw " . $amount;
    }
}