<?php
require_once ("../connect.php");
if(!(isset($_POST['oldpassword'])&&(!empty($_POST['oldpassword'])))){
    echo '请输入旧密码<a href="password_reverse.php">返回</a>';
    exit;
}else{
    $oldpassword = $_POST['oldpassword'];
}
if(!(isset($_POST['newpassword'])&&(!empty($_POST['newpassword'])))){
    echo '请输入新密码<a href="password_reverse.php">返回</a>';
    exit;
}else{
    $newpassword = $_POST['oldpassword'];
}
$sql = "select password from guestbook";
$res1 = $mysqli->query($sql);
if ($res1){
    $row1 = $res1->fetch_assoc();
}else{
    exit;
}
if ($row1['password']!=$oldpassword){
    echo "<script>alert('旧密码错误');window.location.href = 'password_reverse.php'</script>";
}else{
    $update_sql = "update guestbook set password = '$newpassword'";
    $res2 = $mysqli->query($update_sql);
    if ($res2){
        echo "<script>alert('修改成功');window.location.href = 'user.php'</script>";
    }else{
        echo "<script>alert('修改失败');window.location.href = 'password_reverse.php'</script>";
    }
}

