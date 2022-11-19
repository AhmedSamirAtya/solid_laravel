<?php 

namespace App\Solid\LiskovAndInterfaceSegregation\Bad;

interface BadExportable
{
    public function getPDF();
    public function getCSV();
}