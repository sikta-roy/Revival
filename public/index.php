<?php
session_start();

if(!isset($_SESSION['user'])){
   header("location: patient_login.html");
}else{
   header("location: index.html");
}