<?php
session_start();
require_once ("../connect.php");
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['username'])){
    echo "<script>location.href='login.php'</script>";
    exit();
}
$sql = "select * from guestbook";
$res = $mysqli->query($sql);
if ($res){
    $row = $res->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>后台管理系统</title>
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
    <form class="form-horizontal" role="form" method="post" action="passwordhandle.php">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="admin" name="username" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="oldpassword" class="col-sm-2 control-label">请输入旧密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="oldpassword" placeholder="旧密码" name="oldpassword">
            </div>
        </div>
        <div class="form-group">
            <label for="newpassword" class="col-sm-2 control-label">请输入新密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="newpassword" placeholder="新密码" name="newpassword">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">确认修改</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src = "//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
