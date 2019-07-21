<?php
    include("../pagelayout/header.php");
    include("../pagelayout/footer.php");
?>
<html>
    <head>
        <title>Library System - ISSUE</title>
    </head>
    <body>
         <?php        include("../../require/searchissueform.php"); ?>
        <br>
        <?php
        if($_POST['s_id'])
    { 
        require_once("../../functions/database.php");
        searchissue($_POST['s_id']);
    }
    ?>
        
        <br>
<?php
    require_once "../../../../functions/database.php";
    allmtechcivilstudents();
?>
    </body>
</html>