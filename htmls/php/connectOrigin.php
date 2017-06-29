<?php

$link = mysqli_connect("120.24.83.142" , "test" , "Novellus2010")
or die(  "连接 MySQL 失败: " . mysqli_connect_error() );

mysqli_query($link ,"set names ’utf8’ ");
mysqli_query($link, "set character set 'utf8'");
mysqli_query($link ,"set character_set_client=utf8");
mysqli_query($link ,"set character_set_results=utf8");

mysqli_select_db( $link, "membersysbase");
?>