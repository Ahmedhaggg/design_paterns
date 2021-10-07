<?php

namespace Paterns\Structural\Facade\Payments;
use Paterns\Structural\Facade\Payments\IPayment;

class PayCash implements IPayment
{
    public function pay(int $amount): string
    {
        return "Cash : withdraw " . $amount;
    }
}