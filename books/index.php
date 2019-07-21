 <?php
 require_once ("../pagelayout/header.php");
 require_once ("../pagelayout/footer.php");
 require_once '../functions/database.php';    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - Books</title>
    </head>
    <body>
      
        <?php        include("../require/searchbookform.php"); ?>
        
        <br>
        <?php
        if($_POST['book_id'])
    { 
        searchallbook($_POST['book_id']);
    }
    ?>
        
        <br>
<?php
    allbooks();
    
?><br/>
<br/><br/>
    </body>
</html>