<?php
echo "fuch"; 
echo "<br>";
function getIP(){
     $ip = $_SERVER['REMOTE_ADDR'];
     $_SESSION['ip']=$ip;
     return $_SESSION['ip'];
}
function CreateToken(){
        $token = hash("sha256",getIP());
        $_SESSION['token']=$token;
        return $_SESSION['token'];
}
function getToken(){
     return $_SESSION['token'];
}
function CheckToken(){
   if(!isset($_SESSION['token']) || !isset($_GET['token']) || $_SESSION['token'] != $_GET['token']){
       return 0; 
      }
   return 1;
}
        

echo getIP(); 
echo "<br>";
echo CreateToken();
echo "<br>";
//echo getToken();
echo "<br>";
echo CheckToken();
header('location:sun.php?token='.$_SESSION['token'].'/');