<?php

$email = $_POST['email'];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => [
          'secret' => '6LeLaxITAAAAAGU_oHWP3KcLCL13yqT4Sogt2zOV',
          'response' => $_POST['g-recaptcha-response'],
    ],
]);

$response = json_decode(curl_exec($curl));

var_dump($response);

?>