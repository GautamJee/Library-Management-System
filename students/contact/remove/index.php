<?php
 require_once ("../../../pagelayout/header.php");
 require_once ("../../../pagelayout/footer.php");
 require_once '../../../functions/database.php';
    
?>
<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="removestudcontact" />
    <label class="textbox">Remove Contact</label><br/>
    <input class="search-form-input" type="number" name="sid" placeholder="sid" /><br/>
    <input class="search-form-input" type="number" name="contact" placeholder="contact number" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Remove Contact?')" name="submit" value="Remove"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Reset?')" value="Clear" />
</form>

<div class="floatinglinks" >
        <a  href="/students/contact/add/">Add Contact</a><br/>
        <a  href="/students/contact/update/">Update Contact</a>
</div>

<?php 
removestudentcontact();
?>