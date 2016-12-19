<?php
require_once ("../connect.php");
if(!(isset($_GET['id'])&&(!empty($_GET['id'])))){
    echo '请选择要删除的留言<a href="commentmanage.php">返回</a>';
    exit;
}else {
    $id = $_GET['id'];
}
$sql = "DELETE FROM comments WHERE id = '$id'";
$res = $mysqli->query($sql);
if ($res){
    echo "<script>alert('删除成功');window.location.href = 'commentmanage.php'</script>";
}else{
    echo "<script>alert('删除失败');window.location.href = 'commentmanage.php'</script>";
}