<?php

namespace App\Solid\SingleResponsibility;


class SalesReport{

    // violation

    // public function export(){

    //     $data = 'data from database'; // one task

    //     return $this->formatData($data); // second task
    // }

    // private function formatData($data){
    //     return 'pdf format';
    // }
    //---------------------------------------------------------

    public function export(){
        return 'data from Db ';
    }
}