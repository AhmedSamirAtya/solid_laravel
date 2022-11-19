<?php 


namespace app\Solid\DependencyInversionPrinciple\Bad;

class PayBalGateway 
{
    public function pay() : void
    {
        echo 'Pay by PayBal';
    }
}