<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>




<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="removestudent" />
    <label class="textbox">Remove a Student</label><br/> 
    <input class="search-form-input" type="number" name="sid" placeholder="sid" /><br/> 
    <input class="search-form-input" type="text" name="htno" placeholder="ht no" /><br/>
    <input class="search-form-input" type="text" name="sname" placeholder="sname" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Confirm to Remove Student ?')" name="submit" value="Remove"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Really want to clear form ?')" value="Clear" />
</form>
<br/><br/>


<?php
       
removestudent();
?>
<br/><br/>
<div class="floatinglinks" >
        <a target="_blank" href="/students/modifystudent/contact/add/">Add Contact</a><br/>
        <a target="_blank" href="/students/modifystudent/contact/update/">Update Contact</a><br/>
        <a target="_blank" href="/students/modifystudent/contact/remove/">Remove Contact</a>
</div>