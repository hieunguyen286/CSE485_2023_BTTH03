<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db_name = "btth03_1";  
 $conn = new mysqli($servername, $username, $password, $db_name, 3306);
 mysqli_query($conn, "SET NAMES 'utf8'");
 if($conn->connect_error){
     die("Connection failed".$conn->connect_error);
 }
?>  