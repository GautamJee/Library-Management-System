<?php
 require_once ("../../../pagelayout/header.php");
 require_once ("../../../pagelayout/footer.php");
 require_once '../../../functions/database.php';
    
?>

<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="updateteachercontact" />
    <label class="textbox">Update Contact</label><br/>
    <input class="search-form-input" type="number" name="tid" placeholder="tid" /><br/>
    <input class="search-form-input" type="number" name="oldcontact" placeholder="old number" /><br/>
    <input class="search-form-input" type="number"  name="newcontact" placeholder="new number" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Update Contact?')" name="submit" value="Update"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Reset?')" value="Clear" />
</form>


<div class="floatinglinks" >
    <a href="/teachers/contact/add/">Add Contact</a><br/>
    <a href="/teachers/contact/remove/">Remove Contact</a>
</div>
<?php 
updateteachertcontact();
?> 