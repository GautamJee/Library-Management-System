 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - BTECH Students</title>
    </head>
    <body>
        <?php        include("../../require/searchstudform.php"); ?>
        <?php   include("../../require/btechbranches.php") ?>
        <br>
        <?php
        if($_POST['s_id'])
    { 
        require_once("../../functions/database.php");
        searchbtechstudent($_POST['s_id']);
    }
    ?>
     <br>
<?php
    require_once "../../functions/database.php";
    allbtechstudents();
?>
    </body>
</html>