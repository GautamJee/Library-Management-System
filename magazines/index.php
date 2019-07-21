 <?php
 require_once ("../pagelayout/header.php");
 require_once ("../pagelayout/footer.php");
 require_once '../functions/database.php';    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - Magazines</title>
    </head>
    <body>
      
        <?php        include("../require/searchmagazineform.php"); ?>
        
        <br>
        <?php
        if($_POST['magazine_id'])
    { 
        searchallmagazine($_POST['magazine_id']);
    }
    ?>
        <br>
<?php
    allmagazines();
?><br/>
<br/><br/>
    </body>
</html>