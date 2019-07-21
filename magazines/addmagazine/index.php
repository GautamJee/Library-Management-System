<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
?>



<form class="form pagecenter" method="post" action="<?php $_PHP_SELF  ?>" id="addmagazine" >
    <label class="textbox">Add New Magazine</label><br/>
    <input class="search-form-input" type="text" name="title" placeholder="title" /><br/>
    <input class="search-form-input" type="text" name="publication" placeholder="publication" /><br/>
    <input class="search-form-input" type="number" name="edition" placeholder="edition" /><br/>
    <input class="search-form-input" type="date" name="published_on" placeholder="published date" /><br/>
    <input class="search-form-input" type="number" name="price" placeholder="price" /><br/>
    <input class="search-form-input" type="number" name="number_of_copies" placeholder="no of copies" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm  ('Confirm to Add the magazine ?')"  name="submit" value="Add"/>
    <input class="search-form-button" type="reset" value="Clear" onclick="return confirm ('Really want to clear form ?')" />
</form>
<?php
    addmagazine();  
?>
<br/><br/><br/>
