<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>demo</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class = "navbar navbar-default" role = "navigation">
    <div class="navbar-header">
        <a class="navbar-brand">Crossain的留言板</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/login.php">个人中心</a></li>
    </ul>
</nav>
<div class="container">
    <form class="form-horizontal" role="form" method="post" action="doAction.php">
        <div class="form-group">
            <label for="nickname" class="col-sm-2 control-label">昵称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nickname" placeholder="nickname" name="nickname">
            </div>
        </div>
        <div class="form-group">
            <label for="personalSite" class="col-sm-2 control-label">个人站点</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="personalSite" placeholder="personalsite" name="personalSite">
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="col-sm-2 control-label">留言内容</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="请留言"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">留言</button>
            </div>
        </div>
    </form>
    
</div>
<script type="text/javascript" src = "//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="../css/dialog/layer.js"></script>-->
<!--<script src="../css/dialog.js"></script>-->
<!--<script src="../css/comment.js"></script>-->
</body>
</html>