<?php

   header("Access-Control-Allow-Origin: *");

   if(isset($_GET['username'])){
    include "database/dbconnectionclass.php";
    $registeruser = new dbconnection;
    $connect=$registeruser->connection();
   if($connect){
       $username= $_GET["username"];
       $password= $_GET["passwd"];
       $phonenumber= $_GET["pnumber"];
       $email= $_GET["email"];
       $age= $_GET["age"]; 
      
      

       $hashedpw= password_hash($passwd, PASSWORD_DEFAULT);

       $sql ="INSERT INTO users(pnumber,uname,email,age,passwd) 
       VALUES('$phonenumber', '$username', '$email','$age','$hashedpw')"; 

       $response= $registeruser->query($sql);

       if($response){
          echo "successful";
        }else{
          echo "Error";
   }
 }
}
?>