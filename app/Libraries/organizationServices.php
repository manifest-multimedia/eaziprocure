<?php

use App\Models\OrgProfiles;


if(!function_exists('getCustomerName')){
    function getCustomerName($id){
        $customer_name=OrgProfiles::where('id', $id)->first()->org_name;
        return $customer_name;
    }
}

if(!function_exists('getCustomerLogo')){
    function getCustomerLogo($id){
        $customer_logo=OrgProfiles::where('id', $id)->first()->org_logo;
        
        if(is_null($customer_logo)){
            $customer_logo="images/avatars/thumb-1.jpg"; 
        }

        return $customer_logo;
    }
}

 if(!function_exists("getFirstName")){
    function getFirstName($name){
        $firstname=explode(' ', trim($name))[0];
        return $firstname; 
    }
}

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
        if(isset($id)){
            $org_currency=OrgProfiles::where('id',$id)->first()->currency_id;
            $currency=getCurrencyName($org_currency);
            return $currency;
        }else{
            $default_currency="United States Dollar";
            return $default_currency;
        }
    }

}

if(!function_exists('getOrgCurrencySymbol')){
    function getOrgCurrencySymbol($id){
        
        $currency="$";

        try {
         
         $update_currency=getCurrencyCode(OrgProfiles::where('id',$id)->first()->currency_id);

        
            return $update_currency;

        } catch (\Throwable $th) {

            return $currency;
            //throw $th;
        }    
        
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