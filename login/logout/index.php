<?php 

session_start();
session_reset();
$_SESSION['username']='GUEST';
$_SESSION['user']='guest';
$_SESSION['logid']='';
$_SESSION['pass']='ArjunCollege1!';
$host=$_SERVER['HTTP_HOST'];
header("location:http://$host/");
exit();
require_once "../../pagelayout/header.php";

require_once '../../pagelayout/footer.php';
?>