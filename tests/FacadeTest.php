<?php
use PHPUnit\Framework\TestCase;
use Paterns\Structural\Facade\PaymentFacade;

class FacadeTest extends TestCase
{
    public function testCanPayWithCredit() {
        $payment = new PaymentFacade();
        $this->assertEquals("Credit : withdraw 50", $payment->pay("credit", 50));
    }
    public function testCanPayWithCash() {
        $payment = new PaymentFacade();
        $this->assertEquals("Cash : withdraw 50", $payment->pay("cash", 50));
    }
    public function testCanPayWithDebit() {
        $payment = new PaymentFacade();
        $this->assertEquals("Debit : withdraw 50", $payment->pay("debit", 50));
    }
}