<?php 
    session_start();
    header('Content-Type: image/jpeg' );

    $image_captcha = imagecreate(100,30);
    $fondo = imagecolorallocate($image_captcha,140,	191	,230);
    $texto = imagecolorallocate($image_captcha,255,84,143);

    imagestring($image_captcha,5,10,5,$_SESSION['codigo_captcha'],$texto);

    imagejpeg($image_captcha);