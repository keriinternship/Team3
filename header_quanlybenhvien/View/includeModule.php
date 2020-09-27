<?php
    $url = 'http://localhost/header_quanlybenhvien/index.php';
    $user = $_COOKIE['username'];
    $pass = $_COOKIE['password']; 
    $id = $_COOKIE['id_nhanvien'];
   if((!isset($user))||(!isset($pass))){
        header('location:'.$url);
        exit();
    }
    require_once './config/database.php';
    require_once './app/models/Db.php';
    require_once './config/config.php';
    require_once './app/models/getProfileModule.php';
    $getprofile = new getProfileModule();
    $profile = $getprofile->getProfileById($id);
?>