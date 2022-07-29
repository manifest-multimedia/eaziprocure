<?php

use App\Models\Currency;

if(!function_exists('getCurrencyName')){
    
    function getCurrencyName($id){

        $currency=Currency::where('id', $id)->first()->currency;


        return $currency;

    }

}

if(!function_exists('getCurrencyCode')){

    function getCurrencyCode($id){

        return $id;
    }

}