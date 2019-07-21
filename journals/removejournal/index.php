<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>






<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="removejournal">
    <label class="textbox">Remove a Journal</label><br/>
    <input class="search-form-input" type="number" name="id" placeholder="id" /><br/>
    <input class="search-form-button" type="submit"  value="Remove"  onclick="return confirm ('Confirm to Remove the journal ?')"/>
    <input class="search-form-button" type="reset" value="Clear" />
</form>
<br/><br/>

<?php
         removejournal();
?>