<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
   if(!empty($username)&& !empty($password)){
    echo "Registration Successful";
    echo "Username: ".$username."<br>";
   }else{
    echo "Both fields are required";
   }
}