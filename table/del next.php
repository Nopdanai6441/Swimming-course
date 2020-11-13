<?php
include('../login_v16/connect.php');
mysqli_set_charset($conn, "utf8");
$id = $_GET['id'];
    $sql = "DELETE FROM `memnext` WHERE `memnext`.`id` =$id ";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql" .mysqli_error($sql));
    mysqli_close($conn);
    
    if($result){
        header('location:full-screen-table memnext.php');
    }else{
        header('location:full-screen-table memnext.php');
    }
      
?>