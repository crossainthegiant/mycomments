<?php
require_once ("../connect.php");
if(!(isset($_GET['id'])&&(!empty($_GET['id'])))){
    echo '请选择要回复的留言<a href="commentmanage.php">返回</a>';
    exit;
}else {
    $id = $_GET['id'];
}
if(!(isset($_POST['reply'])&&(!empty($_POST['reply'])))){
    echo '请回复留言<a href="commentmanage.php">返回</a>';
    exit;
}else {
    $reply = $_POST['reply'];
}

$replytime = time();
//var_dump($id);
//var_dump($reply);
//var_dump($replytime);
$sql = "UPDATE `comments` SET `reply`='$reply',`replytime`=$replytime WHERE id=$id";
$res = $mysqli->query($sql);
if ($res){
    echo "<script>alert('回复成功');window.location.href = 'commentmanage.php'</script>";
}else{
    echo "<script>alert('回复失败');window.location.href = 'commentmanage.php'</script>";
}