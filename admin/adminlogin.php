<?php
session_start();
header("Content-Type: text/html; charset=utf8");


include ('connectAdmin.php');
echo $_POST['phone'];
echo $_POST['password'];
$phone = $_POST['phone'];//post获得用户名
$password = $_POST['password'];//post获得用户密码单值
if($phone && $password){
    $sql = "select phone,password from adminuser where phone = '$phone' and password = '$password'";

    $result = mysqli_query($con, $sql);

    $rows = mysqli_num_rows($result);

    if($rows){
        $_SESSION['uid'] = $phone;
        header("refresh:2; url=adminIndex.php");
        exit;
    }else{
        echo "用户名或密码错误";
        session_destroy();
        echo "<script>alert('密码错误..跳转')</script>";
    };

}else{
    echo "表单填写不完整";
    echo "<script>alert('表单填写不完整')</script>";
}
mysqli_close($con);

?>
