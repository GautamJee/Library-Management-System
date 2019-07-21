<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>


<label class="textbox">Add New Event</label>
    
<form class="form" action ="<?php $_PHP_SELF ?>" method="post">
        Title : <input type="text" name="title"/><br/>  
        Description : <input  type="text" name="detail"/><br/>
        <input type="hidden" value="<?php printcontact();?>" name="contact"/>
        Date : <input type="date" name="date" /><br/>
        <input class="button" type="submit" name="submit" value="Add Event Now" />
        <input class="button" type="reset" value="Clear" />
    </form>

<?php
        
addevent();  
?>

