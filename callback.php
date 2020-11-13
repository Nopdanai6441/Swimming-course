<?php
    session_start();
    include_once('login_v16/connect.php');


    echo "<pre>";
    print_r($_GET);

    if(!isset($_GET['error']) && isset($_GET['code']) && $_GET['code'] != ""){
        $code = $_GET['code'];
        $tokenURL = "https://notify-bot.line.me/oauth/token";
        $headerURL  = array(
            'Content-Type: appliication/x-www-form-urlencoded'
        );
        $data = array(
            'grant_type' => 'authorization_code',
            'code' => (string)$code,
            'redirect_uri' => 'https://localhost/xampp/swim/callback.php',
            'client_id' => 'mXQPFaqHiMIlrwEnbGDube',
            'client_secret' => '8spenWjOWyHv1ZgKq8sjZtWXohcVAl2QYSGcEoh0Qfj'
        );


        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $tokenURL);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch,CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        curl_close($ch);

        $result = json_decode($result,TRUE);
         // ตรวจสอบข้อมูล ใช้เป็นเงื่อนไขในการทำงาน
    if(!is_null($result) && array_key_exists('status',$result)){
        if($result['status']==200){
            echo "Access token is: ".$result['access_token'];
            $memid = $_SESSION['memid'];
            $acc_Token = $result['access_token'];
            $sql = "UPDATE member SET acc_Token = '$acc_Token' WHERE `memid`='$memid'";
            $re = mysqli_query($conn,$sql);
            header("location: index.php");
        }
    }
    }else{ // กรณีเกิด error หรืออื่นๆ 
        if(isset($_SESSION['my_service_state_key'])){
            unset($_SESSION['my_service_state_key']);   
        }
        echo 'Authorization fail <br>';
        echo '<a href="author.php"></a>';
        exit;       
    }
    
?>