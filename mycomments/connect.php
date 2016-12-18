<?php
header("Content-type:text/html;charset=utf8");
$mysqli = new mysqli('localhost','root','','commentSubject');
if ($mysqli->connect_errno){
    die($mysqli->connect_error);
}

$mysqli->set_charset('UTF8');
date_default_timezone_set('PRC');