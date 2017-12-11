<?php

   header("Access-Control-Allow-Origin: *");

   if(isset($_GET['username'])){
    include "dbconnectionclass.php";
    $registeruser = new dbconnection;
    $connect=$registeruser->connection();
   if($connect){
       $pnumber= $_GET["pnumber"];
       $username= $_GET["username"];
       $age= $_GET["age"]; 
       $email= $_GET["email"];
       $passwd= $_GET["passwd"];

       $passwdhash= password_hash($passwd, PASSWORD_DEFAULT);

       $sql ="INSERT INTO reports(pnumber,uname,email,age,passwd) 
       VALUES('$pnumber', '$username', '$email','$age','$passwdhash')"; 

       $response= $registeruser->query($sql);

       if($response){
          echo "successful";
        }else{
          echo "Error";
   }
 }
}
?>