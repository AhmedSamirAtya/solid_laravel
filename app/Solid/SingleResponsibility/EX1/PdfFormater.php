<?php

namespace App\Solid\SingleResponsibility\EX1;


class PdfFormater{
    public function formatToPdf($data){
        return $data.'formated to pdf';
    }
}