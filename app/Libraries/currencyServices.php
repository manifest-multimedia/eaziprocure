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

//Currency Converter

if (!function_exists('getCurrentDollarRate')){

    function getCurrentDollarRate($pair){

        //Get Currency Data From Table;
        $compare_price='';
        $current_price='';
        $result='';
        $current_price=Currency::where('pair', $pair)->get();

        if($current_price){

            $compare_price=$current_price;

        } else{
            //Insert Blank Data
            $store=new Currency;
            $store->pair=$pair;
            $store->save();

            $current_price='';

        }


        $url = "https://manifestghana.com/api/v1/currency/$pair";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        curl_close($curl);
        
        // $response=json_decode($response); 
        // return $response->price;

        if($response && !is_null($compare_price)){

           if($compare_price > $response || $compare_price < $response){
                
            $result=$response;
            
            $store=Currency::where('pair', $pair)->update([
                'rate'=>$result
            ]);
            

           }else {
                $result=$compare_price; 
           }
        } else {
            $result='invalid';
        }

        return $result; 


    }
}
