<?php
    require_once 'config.php';
    //连接数据库
    if(!$con = new mysqli(HOST, USERNAME, PASSWORD, 'info')){
        echo $con->error;
    }
    //设置字符集
    if($con->query("set names utf8")){
        echo $con->error;
    }
?>