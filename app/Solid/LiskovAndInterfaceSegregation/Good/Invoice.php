<?php

namespace App\Solid\LiskovAndInterfaceSegregation\Good;

class Invoice implements ExportableCsv, ExportablePdf
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
