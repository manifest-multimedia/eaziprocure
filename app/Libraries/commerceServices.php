<?php 

use App\Models\ProductCategory;



if(!function_exists('getProductCategory')){
    function getProductCategory($id){
        
        $category="";

        try {
            $category=ProductCategory::find($id)->name; 
            //code...
        } catch (\Throwable $th) {
            //throw $th;
            $category='Product';
        }
        
        return $category;
    }

}
