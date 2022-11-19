<?php 


namespace app\Solid\DependencyInversionPrinciple\Good;

class FawryGateway implements Gateway
{
    public function pay() : string
    {
        return 'Pay by Fawry';
    }
}