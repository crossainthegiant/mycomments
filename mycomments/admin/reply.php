<?php
require_once ("../connect.php");
if(!(isset($_GET['id'])&&(!empty($_GET['id'])))){
    echo '请选择要回复的留言<a href="commentmanage.php">返回</a>';
    exit;
}else {
    $id = $_GET['id'];
}
$sql = "SELECT id,comment FROM comments WHERE id = '$id'";
$res = $mysqli->query($sql);
if ($res){
    $row = $res->fetch_assoc();
}else{
    echo "<script>alert('回复失败');window.location.href = 'commentmanage.php'</script>";
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
    <form class="form-horizontal" role="form" method="post" action="replyhandle.php?id='<?php echo $id?>'">
        <div class="form-group">
            <label for="currentcomment" class="col-sm-2 control-label">原留言</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="currentcomment"  placeholder="<?php echo $row['comment'];?>" name="currentcomment" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="reply" class="col-sm-2 control-label">回复留言</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="reply" name="reply" placeholder="回复留言"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">留言</button>
            </div>
        </div>
    </form>

</div>



</body>
</html>
