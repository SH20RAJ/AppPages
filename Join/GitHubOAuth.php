<?php
function getAuthenticatedUser($access_token) { 
        $apiURL = "https://api.github.com/user"; 
         
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $apiURL); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: token '. $access_token)); 
        curl_setopt($ch, CURLOPT_USERAGENT, 'CodexWorld GitHub OAuth Login'); 
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
        $api_response = curl_exec($ch); 
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);          
          
        if($http_code != 200){ 
            if (curl_errno($ch)) {  
                $error_msg = curl_error($ch);  
            }else{ 
                $error_msg = $api_response; 
            } 
            throw new Exception('Error '.$http_code.': '.$error_msg); 
        }else{ 
            return json_decode($api_response); 
        } 
    } 


?>