<?php

date_default_timezone_set("Asia/shanghai");
$name = $_GET['name'];
$phone = $_GET['phone'];
$location = $_GET['location'];
$house = $_GET['house'];
$content = $_GET['content'];
$Href = $_GET['url'];
$ip = $_SERVER["REMOTE_ADDR"];
$time =  date('Y-m-d G:i:s');

//  email
$to = '1176620400@qq.com';
$subject = $name;
$message = $phone;
$headers = phpversion();

if(mail($to, $subject, $message,$headers)){
    echo "Ok.";
}else{
    echo "Fail1.";
}

?>