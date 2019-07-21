<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>



    

    <form class="form" action="<?php $_PHP_SELF ?>"   method="post">
        <label class="textbox">Update an Event</label><br/>
        Id : <input type="number" name="id"/><br/>  
        New Title : <input type="text" name="title"/><br/>  
        New Description : <input type="text" name="detail"/><br/>
        <input type="hidden" value=" <?php printcontact(); ?>" name="contact"/>
        New Date : <input type="date" name="date"><br/>
        <input class="search-form-button" type="submit" name="submit" value="Update" />
        <input class="search-form-button" type="reset" value="Clear" />
    </form>

<?php
        
updateevent();  
?>




    