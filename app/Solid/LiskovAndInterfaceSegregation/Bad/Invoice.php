<?php

namespace App\Solid\LiskovAndInterfaceSegregation\Bad;

class Invoice implements BadExportable
{
    public function getPDF()
    {
        return 'PDF Invoice';
    }
    public function getCSV()
    {
        return 'CSV Invoice';
    }
}
