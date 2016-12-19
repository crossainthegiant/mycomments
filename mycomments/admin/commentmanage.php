<?php
require_once ('../connect.php');
session_start();
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['username'])){
    echo "<script>location.href='login.php'</script>";
    exit();
}


$sql = "SELECT * FROM comments ORDER BY commenttime";
$res = $mysqli->query($sql);
if ($res&&$res->num_rows){
    while ($row = $res->fetch_assoc()){
        $data[]=$row;
    }
}else{
    $data = array();
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
        <li  class="active"><a href="commentmanage.php">留言管理</a></li>
        <li><a href="user.php">用户信息</a></li>
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
    <table class="table table-hover table-bordered text-center">
        <thead>
        <tr>
            <td>昵称</td>
            <td>个人主页</td>
            <td>评论内容</td>
            <td>评论时间</td>
            <td>我的回复</td>
            <td>回复时间</td>
            <td>留言管理</td>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($data)){
            foreach ($data as $value){ ?>
                <tr>
                    <td><?php echo $value['nickname'];?></td>
                    <td><?php echo $value['personalsite'];?></td>
                    <td><?php echo $value['comment'];?></td>
                    <td><?php echo date("Y-m-d H:i:s",$value['commenttime']);?></td>
                    <td><?php echo $value['reply'];?></td>
                    <td><?php echo date("Y-m-d H:i:s",$value['replytime']);?></td>
                    <td><a href="reply.php?id=<?php echo $value['id']?>">回复</a>/<a href="deleteevent.php?id=<?php echo $value['id']?>">删除</a></td>
                </tr>

         <?php   }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>