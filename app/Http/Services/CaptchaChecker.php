<?php 

namespace App\Http\Services;

class CaptchaChecker {

    protected $privateKey;

    function __construct($key=null){
        if(!$key) $this->privateKey=env('CAPTCHA_SECRET_KEY'); else $this->privateKey=$key;

    }


    public function check($captchaToken){


        $secretKey =  $this->privateKey;
   
   
         // post request to server
         $url = 'https://www.google.com/recaptcha/api/siteverify';
         $data_captcha = array('secret' => $secretKey, 'response' => $captchaToken);
   
         $options = array(
           'http' => array(
             'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
             'method'  => 'POST',
             'content' => http_build_query($data_captcha)
           )
         );
         $context  = stream_context_create($options);
         $response = file_get_contents($url, false, $context);
         $responseKeys = json_decode($response,true);
         //header('Content-type: application/json');
         
         if($responseKeys["success"]) {
           //echo json_encode(array('success' => 'true'));
           return true;
         } else {
   
             return false;
           
         }
   
   
   
   
    }




}