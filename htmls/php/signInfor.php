<?php
session_start();
header("Content-Type: text/html; charset=utf8");
// 确认是否 post 数据
if(!isset($_POST['submit'])){
    exit('数据错误');
}

// 验证码验证
if( $_SESSION['code'] !== strToUpper( $_POST['codes'])){
    echo "<script>alert('验证码错误!')</script>";
    echo "<script>setTimeout(function(){window.location.href='http://localhost/Jiabao0519/htmls/sign.php'})</script>";
}else{

    //  验证通过连接数据库
    include 'connect.php';
    $phone = $_POST['phone'];
    $ps = $_POST['password'];
    //  帐号密码验证
    if( $phone && $ps){
        $rel = "select phone,password,powerLevel from user where phone ='$phone' and password = '$ps'";
        $result = mysqli_query($link , $rel);
        $rowinfo = mysqli_fetch_assoc($result);
        $rows = mysqli_num_rows($result);//返回一个数值
        //  帐号密码验证
        if($rows){//0 false 1 true
            $_SESSION['phone'] = $phone;
//            echo "<script>alert(\"登录成功！\")</script>";

            // 登录成功后 进行会员 powerLevel判定
            if($rowinfo['powerLevel'] >0 ){

                header("refresh:0;url=../member/admin/html");

            }else{
                header("refresh:0 ; url = http://localhost/Jiabao0519");//如果成功跳转至member.html页面
            }

            exit;
        }else{
            print_r($rows);
            echo "用户名或密码错误";
            session_destroy();
//            header("refresh:2;url=sign.php");
        }



    }else{

        // 空帐号密码拦截
        echo "<script>alert('请输入帐号密码!')</script>";
        echo "<script>setTimeout(function(){window.location.href='http://localhost/Jiabao0519/htmls/sign.php'})</script>";
    }
}



?>