<?php
   session_start();

   $host="localhost";
   $user="root";
   $password="";
   $dbname="elven_market_php";

   $conn=mysqli_connect($host,$user,$password,$dbname);
   if(!$conn) {
       die("error: connection failed :" .mysqli_connect_error());
    }
?>