 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - DIPLOMA Students</title>
    </head>
    <body>
        
      <?php        include("../../require/searchstudform.php"); ?>
        <?php   include("../../require/diplomabranches.php") ?>
        
        <br>
        <?php
        if($_POST['s_id'])
    { 
        require_once("../../functions/database.php");
        searchdiplomastudent($_POST['s_id']);
    }
    ?>
        
        <br>
<?php
    require_once "../../functions/database.php";
    alldiplomastudents();
?>
    </body>
</html>