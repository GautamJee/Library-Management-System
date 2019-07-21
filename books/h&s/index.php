

 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");  
?>
<html>
    <head>
       
        <title>Library System - H&S Books</title>
    </head>
    <body>
        
      <?php        include("../../require/searchbookform.php"); 
      require_once("../../functions/database.php");     ?>
        <br>
        <?php
        if($_POST['book_id'])
    { 
        
            searchhnsbookbook($_POST['book_id']);
    }
    allhnsbooks();
    ?>
        
        <br/>
    </body>
</html>