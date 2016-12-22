<?php
session_start();
require_once ("../connect.php");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['username'])){
    echo "<script>location.href='login.php'</script>";
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>demo</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src = "//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class = "navbar navbar-inverse" role = "navigation">
    <div class="navbar-header">
        <a class="navbar-brand">留言板管理后台</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="home.php">后台首页</a></li>
        <li><a href="commentmanage.php">留言管理</a></li>
        <li class="active"><a href="user.php">用户信息</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Hi,</p></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="user.php">用户信息</a></li>
                <li><a href="log_out.php">退出登录</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div class="container">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">用户信息<a href="password_reverse.php">修改密码</a> </div>
        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">用户名：admin</li>
            <li class="list-group-item">用户邮箱:admin@163.com</li>


        </ul>
    </div>
</div>
</body>
</html>