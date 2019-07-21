 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - OTHER Books</title>
    </head>
    <body>
      
        <?php        include("../../require/searchbookform.php"); ?>
        <br>
        <?php
        if($_POST['book_id'])
    { 
        require_once("../../functions/database.php");
        searchotherbook($_POST['book_id']);
    }
    ?>
        
        <br>
<?php
    require_once "../../functions/database.php";
    allotherbooks();
?>
        <br/>
        <?php
    
    if($_SESSION['user']=='admin')
        require_once '../../functions/booksdbaction.php';
?>
    </body>
</html>