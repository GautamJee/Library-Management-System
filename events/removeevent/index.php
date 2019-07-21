<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>


<label class="textbox">Remove an Event</label>
    

<form class="form"  action ="<?php $_PHP_SELF ?>" method="post">
    Id : <input type="number" name="id"/><br/>
        <input class="button" type="submit" name="submit" value="Delete Event Now">
        <input class="search-form-button" type="reset" value="Clear" />
    </form>

<?php
        
deleteevent();  
?>




    