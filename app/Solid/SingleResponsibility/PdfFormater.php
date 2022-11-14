<?php

namespace App\Solid\SingleResponsibility;


class PdfFormater{
    public function formatToPdf($data){
        return $data.'formated to pdf';
    }
}