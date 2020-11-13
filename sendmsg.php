<?php
        include_once('Login_V16/connect.php');

        if(isset($_POST['submit'])){
            $kuynop = mysqli_query($conn, "SELECT * FROM member");
            while ($row= mysqli_fetch_assoc($kuynop)){
                if(mysqli_num_rows($kuynop) > 0){
                    $tken = $row['acc_Token'];
                $accToken = "$tken";
                $notifyURL = "https://notify-api.line.me/api/notify";
                            $headers = array(
                                'Content-Type: application/x-www-form-urlencoded',
                                'Authorization: Bearer '.$accToken
                            );
                            
                           
                            $texttt = $_POST['txtsend'];
                            
                        $message = $texttt;
                        
                        
                        $data = array(
                            'message' => $message                  
                        );
                        $ch = curl_init();
                        curl_setopt( $ch, CURLOPT_URL, $notifyURL);
                        curl_setopt( $ch, CURLOPT_POST, 1);
                        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
                        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
                        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
                        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
                        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                        $result = curl_exec( $ch );
                        
                        curl_close( $ch );
                        
                        var_dump($result);
                        
                        $result = json_decode($result, TRUE);
                        if(!is_null($result) && array_key_exists('status',$result)){
                            if($result['status']==200){
                                
                            
                                header("location: sendmsg.php");
                            
                            }
                        }
                        
                    }
                }
            }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                            <form action="" method="post">
                                <div class="first">
                                    <input type="text" name="txtsend" placeholder="ข้อความ">
                                </div>
                            
                                    <div class="submit">
                                        <input type="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</body>
</html>