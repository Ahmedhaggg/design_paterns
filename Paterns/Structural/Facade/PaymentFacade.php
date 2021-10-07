<?php

namespace Paterns\Structural\Facade;

use Paterns\Structural\Facade\Payments\PayCash;
use Paterns\Structural\Facade\Payments\PayCredit;
use Paterns\Structural\Facade\Payments\PayDebit;

class PaymentFacade
{
    public function pay(string $paymentType ,int $amount): string
    {
        $payment = match ($paymentType) {
            "credit" => new PayCredit(),
            "cash" => new PayCash(),
            "debit" => new PayDebit(),
            default => null,
        };
        return $payment->pay($amount);
    }
}