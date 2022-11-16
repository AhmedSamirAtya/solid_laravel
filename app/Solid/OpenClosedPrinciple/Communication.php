<?php

namespace App\Solid\OpenClosedPrinciple;


class Communication
{
    public function communicate(CanTalk $animal): string
    {
        return $animal->talk();
    }
}
