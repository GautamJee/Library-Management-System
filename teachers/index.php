
<?php
 session_start();
 
    include("../pagelayout/header.php");
    include("../pagelayout/footer.php");
    
    
?>
<html>
    <head>
        <title>Library System - Teachers</title>
    </head>
    <body>
      
        <?php        include("../require/searchteacherform.php"); ?>
        
        <br>
        <?php
        if($_POST['t_id'])
    { 
        require_once("../functions/database.php");
        searchallteacher($_POST['t_id']);
    }
    ?>
        
        <br>
<?php
    require_once "../functions/database.php";
    allteachers();
    
?>
    </body>
</html>