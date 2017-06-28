<?php
session_start();
// 判断 session 是否存在 避免 Notice 提示框
@$_SESSION['phone'] = empty(!$_SESSION['phone']) ? $_SESSION['phone'] : false;

if( $_SESSION['phone'] ){
    echo "<span> 尊贵的嘉宝会员:　</span><a href=\"http://localhost/Jiabao0519/htmls/member/member.html\" target=\"_blank\"> $_SESSION[phone] </a><span class=\"closelog\" style=\"text-decoration: underline;cursor:pointer;\"> 退出 </span>";
}else{
    echo "欢迎来到 嘉宝橱柜 !<a href=\"http://localhost/Jiabao0519/htmls/sign.php\" target=\"_blank\"> [会员登录/注册] </a>";
}
?>