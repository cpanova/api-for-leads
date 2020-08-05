<?php

$url = "https://api-1.cpanova.pro/contact";

$data = array(
    "name": $_POST["name"],
    "phone": $_POST["phone"],
    "offer_id": 18,  // <-- change it
    "pid": 0  // <-- change it
);

$data_string = json_encode($data);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data_string,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;

header('Location: /thankyou.html');  // <-- change 'thankyou.html'
