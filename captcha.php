<?php 
    session_start();
    header('Content-Type: image/jpeg' );

    $image_captcha = imagecreate(70,30);
    