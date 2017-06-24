<?php

createImg();
function createImg(){
    session_start();
    $img = imagecreatetruecolor(80,44);
    $black = imagecolorallocate( $img , 0x00, 0x00, 0x00);
//    $green = imagecolorallocate($img, 0x00, 0xff, 0x00);
    $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
    imagefill( $img , 0 , 0, $white);

//设置验证码字符集合
    $str = "23456789ABCDEFGHJKLMNPQRST";

// 生成随机的验证码
    $code = '';
    for($i=0; $i < 4; $i++){
        $code .= $str[mt_rand(0, strlen($str)-1)];
    }
    $_SESSION['code'] = $code;
    imagestring ( $img ,5,19,10, $code ,$black);



// 干扰点
    for($i=0; $i<50; $i++){
        imagesetpixel( $img, rand(0,100), rand(0,50), $black);
        /* imagesetpixel ( $img , rand(0,100), rand(0,100),$green);*/
    }


    $_SESSION['code'] = $code;
// 输出验证码
    header( 'content-type:image/png');
    imagepng($img);
    imagedestroy($img);
}

?>
