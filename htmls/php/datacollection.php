<?php

include "connect.php";

mysqli_query($link ,"set names ’utf8’ ");
mysqli_query($link, "set character set 'utf8'");
mysqli_query($link ,"set character_set_client=utf8");
mysqli_query($link ,"set character_set_results=utf8");

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




// send to Mysql base

$sql = "insert into user (name , phone , location , house, content , href, IP, time) value( '$name' , '$phone' , '$location' , '$house' , '$content' , '$Href' , '$ip' , '$time')";

$result = mysqli_query($link , $sql);

if($result){
    echo '<script>alert("ok")</script>';
//    echo '<script>window.close();</script>';

}else{
    echo mysqli_error($link);
}
?>