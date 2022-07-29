<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetails($id){
        return $id;
    }
    
    public function productCategory($id){
        return $id;
    }
}
