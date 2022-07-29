<?php

use App\Models\OrgProfiles;

if(!function_exists('getOrganizationName')){
    function getOrganizationName($id){
        $org_name=OrgProfiles::where('id', $id)->first()->org_name;

        if(empty($org_name)){
            return "No Name Found, Update Profile";

        } else {

            return $org_name;
        }

    }

}


if(!function_exists('getOrgCurrency')){

    function getOrgCurrency($id){
        $org_currency=OrgProfiles::where('id',$id)->first()->currency_id;
        $currency=getCurrencyName($org_currency);
        return $currency;
    }

}

if(!function_exists('getOrgEmail')){
    function getOrgEmail($id){

        $org_email=OrgProfiles::where('id',$id)->first()->org_email;

        return $org_email;

    }
}

if(!function_exists('getOrganizationStatus')){
    function getOrganizationStatus(){
        return 'Status Unvailable';
    }
}