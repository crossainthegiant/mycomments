<?php
//require_once ('../function.php');
require_once('../connect.php');
if (!(isset($_POST['nickname']) && (!empty($_POST['nickname'])))) {
    echo '请填写昵称<a href="index.php">返回</a>';
    exit;
} else {
    $nickname = $_POST['nickname'];
}
if (!(isset($_POST['comment']) && (!empty($_POST['comment'])))) {
    echo '请填写留言内容<a href="index.php">返回</a>';
    exit;
} else {
    $comment = $_POST['comment'];
}

if (mb_strlen($nickname) < 3 || mb_strlen($nickname) > 16) {
    echo '昵称长度应在3-16之间！<a href="index.php">重新填写</a>';
    exit;
}
//$url = $_POST['personalSite'];

if ((isset($_POST['personalSite']) && (!empty($_POST['personalSite'])))) {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%
=~_|]/i", $_POST['personalSite'])
    ) {
        echo '个人站点格式不正确<a href="index.php">返回</a>';
        exit;
    } else {
        $url = $_POST['personalSite'];
    }
} else {
    $url = '';
}
$commenttime = time();
//echo $nickname;
//echo $commenttime;
//echo $comment;
//echo $url;

$sql = "insert into comments(nickname,comment,commenttime,personalsite)values('$nickname','$comment','$commenttime','$url')";
$res = $mysqli->query($sql);
if ($res) {
    echo "<script>alert('成功输入');window.location.href = 'index.php'</script>";
}else{
    echo "<script>alert('输入失败');window.location.href='index.php'</script>";
};