 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");  
?>
<html>
    <head>
        <title>Library System - CIVIL Books</title>
    </head>
    <body>
      <?php        include("../../require/searchbookform.php"); 
      require_once("../../functions/database.php");     ?>
        <br>
        <?php
        if($_POST['book_id'])
    { 
        
        searchcivilbook($_POST['book_id']);
    }
    civilallbooks();
    ?>
        
        <br>
    </body>
</html>