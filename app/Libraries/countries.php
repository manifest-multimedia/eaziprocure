<?php 


if(!function_exists('getCountriesList')) {
    function getCountriesList(){
    
    return Countries::getList('en');
        
}
}