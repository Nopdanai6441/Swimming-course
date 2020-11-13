<?php 
    session_start();
    include_once('Login_v16/server.php');
        function RandomToken($length = 32){
            if(!isset($length) || intval($length) <= 8 ){
                $length = 32;
            }
            if(function_exists('random_bytes')) {
                return bin2hex(random_bytes($length));
            }
            if(function_exists('mcrypt_create_iv')) {
                return bin2hex(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
            } 
            if(function_exists('openssl_random_pseudo_bytes')) {
                return bin2hex(openssl_random_pseudo_bytes($length));
            }
        
        }

        //สร้าง session
        $_SESSION['my_service_state_key'] = RandomToken();
        $url = "https://notify-bot.line.me/oauth/authorize?".
        http_build_query(array(
            'response_type' => 'code',
            'client_id' => 'mXQPFaqHiMIlrwEnbGDube',
            'redirect_uri' => 'https://localhost/xampp/swim/callback.php',
            'scope' => 'notify',
            'state' => $_SESSION['my_service_state_key']
            )
        );
        header("location: {$url}"); //ไปหน้าเชื่อมต่อบริการ
        exit;
?>