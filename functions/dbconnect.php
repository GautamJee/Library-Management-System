<?php
session_start();
    if($_SESSION['username']==null)
    {
       mysqli_connect('127.0.0.1', 'guest', 'ArjunCollege1!', 'library') or die ("could not connect to database as Guest!");
       $_SESSION['user']="guest";
       $_SESSION['username']="GUEST";
       $_SESSION['logid']='';
       $_SESSION['pass']='ArjunCollege1!'; 
    }
?>