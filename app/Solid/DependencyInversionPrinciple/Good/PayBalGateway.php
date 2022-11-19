<?php 


namespace App\Solid\DependencyInversionPrinciple\Good;

class PayBalGateway implements Gateway
{
    public function pay() : string
    {
        return  'Pay by PayBal';
    }
}