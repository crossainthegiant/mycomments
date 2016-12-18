<?php
session_start();
require_once ("../connect.php");
if(!(isset($_POST['username'])&&(!empty($_POST['username'])))){
    echo '找不到用户名<a href="login.php">返回</a>';
    exit;
}else{
    $username = $_POST['username'];
}
if(!(isset($_POST['password'])&&(!empty($_POST['password'])))){
    echo '密码错误<a href="login.php">返回</a>';
    exit;
}else{
    $password = $_POST['password'];
}

$sql = "select * from guestbook where username = '$username'";
$res = $mysqli->query($sql);
$row = $res ->fetch_assoc();
//var_dump($row);

if(!$res){
    echo '用户名错误<a href="login.php">返回</a>';
}else{

    $data = $res->fetch_assoc();
    if ($data['password'] = $password){
        $_SESSION['username'] = $username;
        echo '登陆成功,欢迎<a href="home.php">进入后台首页</a>';
    }else{
        echo '密码错误.<a href="login.php">返回</a>';
    }
}


