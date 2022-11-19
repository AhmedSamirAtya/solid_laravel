<?php 

namespace app\Solid\DependencyInversionPrinciple\Good;

class PaymentProcess 
{
    protected $gateWay;

    public function __construct(Gateway $gateWay)
    {
        $this->gateWay = $gateWay;
    }

    public function pay() : string 
    {
        return $this->gateWay->pay();
    }
}