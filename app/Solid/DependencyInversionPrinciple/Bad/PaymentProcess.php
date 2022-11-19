<?php 


namespace app\Solid\DependencyInversionPrinciple\Bad;

class PaymentProcess 
{
    protected $gateWay;

    public function __construct(PayBalGateway $gateWay)
    {
        $this->gateWay = $gateWay;
    }

    public function pay()
    {
        $this->gateWay->pay();
    }
}