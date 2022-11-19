<?php

namespace App\Solid\LiskovAndInterfaceSegregation\Good;

use Exception;

class CreditNote implements ExportableCsv
{
    public function getCSV()
    {
        return 'CSV Invoice';
    }
}
