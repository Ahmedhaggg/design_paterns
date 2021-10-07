<?php

namespace Paterns\Structural\Facade\Payments;

interface IPayment
{
    public function pay(int $amount) : string;
}