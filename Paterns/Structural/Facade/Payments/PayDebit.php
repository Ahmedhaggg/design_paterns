<?php

namespace Paterns\Structural\Facade\Payments;
use Paterns\Structural\Facade\Payments\IPayment;

class PayDebit implements IPayment
{
    public function pay(int $amount): string
    {
        return "Debit : withdraw " . $amount;
    }
}