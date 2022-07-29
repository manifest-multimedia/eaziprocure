<?php 

use App\Models\ProductCategory;

if(!function_exists('getProductCategory')){
    function getProductCategory($id){
        $category=ProductCategory::find($id)->name; 
        return $category;
    }

}
