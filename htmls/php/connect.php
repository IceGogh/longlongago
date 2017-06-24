<?php

$link = mysqli_connect("localhost" , "root" , "Novellus2010")
    or die(  "连接 MySQL 失败: " . mysqli_connect_error() );

mysqli_select_db( $link, "membersysbase");
?>