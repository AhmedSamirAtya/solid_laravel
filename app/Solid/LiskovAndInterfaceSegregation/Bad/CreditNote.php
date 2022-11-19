<?php

namespace App\Solid\LiskovAndInterfaceSegregation\Bad;

use Exception;

class CreditNote implements BadExportable
{
    public function getPDF()
    {
        throw new Exception('canot return ODF foemat');
    }
    public function getCSV()
    {
        return 'CSV Invoice';
    }
}
