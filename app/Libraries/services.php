<?php

use App\Models\ServiceCharge;

if(!function_exists('getServicePrice')){
    function getServicePrice($id){

        $service_charge=ServiceCharge::where('service_id', $id)->first();

    }
}