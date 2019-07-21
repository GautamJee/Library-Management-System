 
<?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");
    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - H&S Teachers</title>
    </head>
    <body>
      
        <?php        include("../../require/searchteacherform.php"); ?>
        
        <br>
        <?php
        if($_POST['t_id'])
    { 
        require_once("../../functions/database.php");
        searchhnsteacher($_POST['t_id']);
    }
    ?>
        
        <br>
<?php
    require_once "../../functions/database.php";
    allhnsteachers();
?>
    </body>
</html>