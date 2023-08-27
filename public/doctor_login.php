<?php
session_start();

$url = "https://script.google.com/macros/s/AKfycbx9EHBqNvic2YtWPVwrDGcnhFCiOz552jIRbDAwRjAlLTGHUJWfkOo9z2D1VSROpxrdAw/exec";
$postData = [
   "action" => "login",
   "email" => $_POST['email'],
   "password" => $_POST['password']
];

$ch = curl_init($url);
curl_setopt_array($ch, [
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POSTFIELDS => $postData
]);

$result = curl_exec($ch);
$result = json_decode($result, 1);

if($result['status'] == "success"){
   $_SESSION['user'] = $result['data'];
   header("location: index.html");
}else{
   $_SESSION['error'] = $result['message'];
   header("location: patient_login.html");
}

