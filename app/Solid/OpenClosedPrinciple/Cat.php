<?php

namespace App\Solid\OpenClosedPrinciple;


class Cat implements CanTalk
{
    public function talk(): string
    {
        return 'Meaw Meaw Meaw';
    }
}
