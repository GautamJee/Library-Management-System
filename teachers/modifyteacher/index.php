<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>




<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="modifyteacher" />
    <label class="textbox">Updating Teacher's Detail</label><br/>
    <input class="search-form-input" type="number" name="tid" placeholder="tid" /><br/>
    <input class="search-form-input" type="text" name="uid" placeholder="uid" /><br/>
    <input class="search-form-input" type="text" name="name" placeholder="name" /><br/>
    <input class="search-form-input" type="text" name="dept" placeholder="dept" /><br/>
    <input class="search-form-input" type="text" name="branch" placeholder="branch" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Confirm to Modify Teacher Details?')" name="submit" value="Update"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Really want to clear form ?')" value="Clear" />
</form>
<br/>
<?php
       
modifyteacher(); 
?>
<div class="floatinglinks" >
        <a href="/teachers/contact/add/">Add Contact</a><br/>
        <a href="/teachers/contact/update/">Update Contact</a><br/>
        <a href="/teachers/contact/remove/">Remove Contact</a>
</div>
<br/><br/><br/>