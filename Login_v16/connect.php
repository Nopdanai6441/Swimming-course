<?php 
    $conn = new mysqli('localhost','root','','swim');

      if( $conn->connect_errno){
             die("Connection failed" . $conn->connect_error); 
      } 
date_default_timezone_set("Asia/Bangkok");
?>
