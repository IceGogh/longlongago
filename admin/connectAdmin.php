<?php
$con = mysqli_connect("localhost" , "root" , "Novellus2010");//链接数据库
if(!$con){
    die("can't connect");
}else{
    echo "连接成功";
}

$link = mysqli_select_db($con , 'membersysbase');
mysqli_query($con ,"set names ’utf8’ ");
mysqli_query($con ,"set character_set_client=utf8");
mysqli_query($con ,"set character_set_results=utf8");
if($link){
    echo "<br/>"."成功";
}else{
    echo "fail";
}
?>