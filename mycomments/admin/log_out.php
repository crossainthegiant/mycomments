<?php
if (!isset($_SESSION['username'])){

    unset($_SESSION['username']);
    echo "<script>location.href='../home/index.php';</script>";
}