 <?php
 require_once ("../pagelayout/header.php");
 require_once ("../pagelayout/footer.php");
 require_once '../functions/database.php';    
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library System - Journals</title>
    </head>
    <body>
      
        <?php        include("../require/searchjournalform.php"); ?>
        
        <br>
        <?php
        if($_POST['journal_id'])
    { 
        searchalljournal($_POST['journal_id']);
    }
    ?>
        <br>
<?php
    alljournals();
?><br/>
<br/><br/>
    </body>
</html>