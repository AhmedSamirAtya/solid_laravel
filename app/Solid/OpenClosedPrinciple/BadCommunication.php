<?php

namespace App\Solid\OpenClosedPrinciple;

use Exception;

class BadCommunication
{
    public function communicate(CanTalk $animal): string
    {
        if($animal instanceof Fox){
            return $animal->talk();
        }elseIf($animal instanceof Cat){
            return $animal->talk();
        }else{
            throw new Exception('unknown animal');
        }
    }
}