<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--    --><?php
//    session_start();
//    if(!$_SESSION['phone']) {
//        header("refresh:0; url=http://localhost/Jiabao0519");
//    };?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>嘉宝橱柜工作人员页面</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="windows-Target" content="_top">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=1.0,Transition=8)">
    <meta name="author" content="嘉宝橱柜网络部 4535292@qq.com" />
    <link href="../../images/favicon.ico" rel="short icon"/>
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <link href="../../css/common.css" rel="stylesheet"/>
</head>
<body>
<div class="header-top">
    <div class="common-inner">
        <div class="logo">
            <a>
                <img src="../../images/logo.png" title="嘉宝官网"/>
            </a>
        </div>
        <div style="width:200px; padding-left:100px; height:90px;  border:1px solid red;">
            <p style="color:#00a6b9; font-size:28px; ">工作人员页面</p>

<?php
    $name = $_GET['name'];
    $ip=$_SERVER["REMOTE_ADDR"];
    echo "<p>$name</p>";
    echo "<br/>"."<p>$ip</p>";
?>
        </div>
        <div class="index-lianjie">
            <a class="iconTM" href="https://jiabaochugui.tmall.com" target="_blank">天猫旗舰店</a>
            <a class="iconJD" href="http://mall.jd.com/index-656949.html" target="_blank">京东旗舰店</a>
            <a class="iconJD" href="http://mall.jd.com/index-672672.html" target="_blank">全屋定制店</a>
            <a class="iconTB" href="https://shop105792262.taobao.com" target="_blank">淘宝直营店</a>

        </div>
    </div>
</div>




</body>

