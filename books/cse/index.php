 <?php
 session_start();
 
    include("../../pagelayout/header.php");
    include("../../pagelayout/footer.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - CSE Books</title>
    </head>
    <body>
      
        <?php        include("../../require/searchbookform.php"); ?>
        <br>
        <?php
        require_once("../../functions/database.php");
        if($_POST['book_id'])
    { 
        searchcsebook($_POST['book_id']);
    }
    cseallbooks();
    ?>
        
        <br>

    </body>
</html>