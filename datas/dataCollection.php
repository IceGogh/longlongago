<?php

include "connectAdmin.php";
$name = $_GET['name'];
$phone = $_GET['phone'];
$location = $_GET['location'];
$house = $_GET['house'];
$content = $_GET['content'];
$href = $_GET['url'];
$IP = $_GET['IP'];
date_default_timezone_set('Asia/Shanghai');
$time =  date('Y-m-d H:i:s');
$day = date('d')%2;
//  星期
$weekArray = array("日", "一", "二", "三", "四", "五", "六");
$week = $weekArray[date('w')];


//  同时发送email到QQ邮箱 同时做好分组
if( $day == 0 ){
     $to = "4535292@qq.com, 45362911@qq.com,58003840@qq.com";
    $team = 100;
    $customer = '肖右生';
}else{

     $to = "4535292@qq.com, 58003840@qq.com, 420116301@qq.com";
    $team = 200;
    $customer = '柴慧';
}
	//$to = "4535292@qq.com";


// 数据拦截验证
    // $name 为中文名称

    // $phone 数据库中是否存在
    $vertifyPhone = "select phone from user where phone = ".$phone;
    $phoneTest = mysqli_query($con, $vertifyPhone);
    $phoneResult = mysqli_num_rows($phoneTest);

    //  验证中文姓名
    if (preg_match("/^[\x80-\xff]{6,30}$/", $name)) {

        if ($phoneResult !== 0 ) {
            echo "当前手机号已报名";
        } else {


            $sql = "insert into user (name, phone, location, house, IP, href, time, content, week, team, customer) value ('$name', '$phone', '$location', '$house', '$IP', '$href', '$time', '$content', '$week', '$team', '$customer')";
            $query = mysqli_query($con, $sql);
            if (!$query) {
                die('Error: ' . mysqli_error($con));
            } else {
                include 'sendMail.php';
                // 数据成功传输后  返回 报名成功
                echo '报名成功!';
            }
        }
    }
mysqli_close($con);
?>