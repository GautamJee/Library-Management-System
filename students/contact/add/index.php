<?php
 require_once ("../../../pagelayout/header.php");
 require_once ("../../../pagelayout/footer.php");
 require_once '../../../functions/database.php';
    
?>

<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="addstudcontact" />
    <label class="textbox">Add New Contact</label><br/>
    <input class="search-form-input" type="number" name="sid" placeholder="sid" /><br/>
    <input class="search-form-input" type="number" name="contact" placeholder="contact number" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Add New Contact?')" name="submit" value="Add"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Reset?')" value="Clear" />
</form>

<div class="floatinglinks" >
        <a href="/students/contact/update/">Update Contact</a><br/>
        <a href="/students/contact/remove/">Remove Contact</a>
</div>

<?php 
addstudentcontact();
?>