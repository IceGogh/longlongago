<?php
session_start();
// 确认是否 post 数据
if(!isset($_POST['submit'])){
    exit('数据错误');
}

// 验证码验证
if( $_SESSION['code'] !== strToUpper($_POST["codes"])){
    echo '验证码错误';
    var_dump($_SESSION['code']);
    echo '<br/>';
    var_dump(strToUpper($_POST["codes"]));
    echo '<script>setTimeout(function(){window.location.href=\'http://localhost/Jiabao0519/htmls/sign.php\'},1000)</script>';

}else{
    include 'connect.php';
    //  保存 post 接受到的 帐号及密码
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    //  插入数据库
    $sql = "insert into USER (id, phone, password) VALUE (null ,'$phone', '$password')";
    $result = mysqli_query($link,$sql);


    //  判断是否 执行是否失败
    if( !$result ){

        die('Error : '. mysqli_error($link));
    }else{

        echo "sign up success!".$_SESSION['code'];
        echo '<script>setTimeout(function(){window.location.href=\'http://localhost/Jiabao0519/htmls/sign.php\'},1000)</script>';
    }


// close mysqli connect
    mysqli_close($link);

}

?>