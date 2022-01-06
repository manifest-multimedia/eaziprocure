<?php 

if (! function_exists('SMSnotify')){
     
     function SMSnotify($destination, $message, $sender, $authorization){
         $curl = curl_init();
         curl_setopt_array($curl, array(
             CURLOPT_URL => 'https://l4rr2.api.infobip.com/sms/2/text/advanced',
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => '',
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => 'POST',
             CURLOPT_POSTFIELDS =>'{"messages":
                 [{"from": "'.$sender.'",
                 "destinations":[{"to":"'.$destination.'"}],
                 "text":"'.$message.'"}]}',
             CURLOPT_HTTPHEADER => array(
                 'Authorization:'."$authorization",
                 'Content-Type: application/json', 
                 'Accept: application/json', 
             )    
         
         ));
         
         $response = curl_exec($curl);
         
         curl_close($curl);
     
         return $response;
     }   
 }

 ?> 