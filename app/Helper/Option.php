<?php


namespace App\Helper;


use App\Model\MTax;

class Option {
    static function tax() {
        $taxs = MTax::select('id', 'tax_rate')->get();
        $res = [];
        foreach ($taxs as $tax) {
            $res[$tax['id']] = $tax['tax_rate'];
        }
        return $res;
    }
}