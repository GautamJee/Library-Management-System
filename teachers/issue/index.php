<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>

<form class="form" method="post" action="<?php  $_PHP_SELF ?>" id="checkteacherstat" >
    <label class="textbox">Check Status</label><br/>
    <input class="search-form-input" type="number" name="tid" placeholder="tid" /><br/>
    <input class="search-form-button" type="submit" name="submit" value="Check"/>
</form>


<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="issuebookteacher" />
    <label class="textbox">Issue Book to Teacher</label><br/>
    <input class="search-form-input" type="number" name="tid" placeholder="tid" /><br/>
    <input class="search-form-input" type="number" name="bid" placeholder="book id" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Confirm to Issue ?')" name="submit" value="Issue"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Really want to clear form ?')" value="Clear" />
</form>
<br/>
<?php
       issueteacherbook();
?>

<br/><br/><br/><br/><br/><br/>