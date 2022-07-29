<?php

if(!function_exists('sendSMS'))
{
    function sendSMS($senderId, $message, $mobile_number){



        //Set Time Zone as this is very important to ensure your messages are delivered on time
    date_default_timezone_set('Africa/Accra');

    // Account details

    //Client ID 62bc2ef49acf0
    //Application Secret d84aeae8b327fcb5df685136743b71ee

    // $username = '62bc2ef49acf0';
    // $password = 'd84aeae8b327fcb5df685136743b71ee';
    $username = 'johnson@manifestghana.com';
    $password = 'n1"V4n5BSsiT4f';

    // Prepare data for POST request
    $baseUrl = 'https://api.helliomessaging.com/v1/sms';
    $senderId = $senderId; //Change this to your sender ID e.g. HellioSMS
    $mobile_number = $mobile_number; //Change this to the recipient you wish to send the message to
    $message = $message; //The message to be send here

            $params = [
            'username' => $username,
            'password' => $password,
            'senderId' => $senderId,
            'msisdn' => $mobile_number,
            'message' => $message
            ];

    // Send the POST request with cURL
    $ch = curl_init($baseUrl);
    $payload = json_encode($params);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload)
    ));

    // Process your response here
    $result = curl_exec($ch);
    echo var_export($result, true);
    curl_close($ch);
        
    return $result; 

    }
}


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
