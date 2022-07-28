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

if(!function_exists('getOrganizationStatus')){
    function getOrganizationStatus(){
        return 'Status Unvailable';
    }
}