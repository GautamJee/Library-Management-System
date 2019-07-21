 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - MECH Books</title>
    </head>
    <body>
      
        <?php        include("../../require/searchbookform.php"); ?>
        <br>
        <?php
        if($_POST['book_id'])
    { 
        require_once("../../functions/database.php");
        searchmechbook($_POST['book_id']);
    }
    ?>
        
        <br>
<?php
    require_once "../../functions/database.php";
    mechallbooks();
?>
    </body>
</html>