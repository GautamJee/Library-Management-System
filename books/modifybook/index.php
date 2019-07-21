<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
    
?>



<form class="form" method="post" action="<?php $_PHP_SELF ?>" id="modifybook" >
    <label class="textbox">Modify Book Detail</label><br/>
    <input class="search-form-input" type="number" name="id" placeholder="id" /><br/>
    <input class="search-form-input" type="text" name="title" placeholder="title" /><br/>
    <input class="search-form-input" type="text" name="publication" placeholder="publication" /><br/>
    <input class="search-form-input" type="number" name="edition" placeholder="edition" /><br/>
    <input class="search-form-input" type="text" name="branch" placeholder="branch" /><br/>
    <!-- <select class="search-form-input" name="branch" id="branch"><br/>
        <option selected>Select Branch</option>
        <option value="cse">CSE</option>
        <option value="ece" >ECE</option>
        <option value="eee">EEE</option>
        <option value="mech">MECH</option>
        <option value="civil">CIVIL</option>
        <option value="mba">MBA</option>
        <option value="h&s">H&S</option>
        <option value="other">OTHER</option>
    </select> -->
    <input class="search-form-input" type="number" name="number of books" placeholder="no of books" /><br/>
    <input class="search-form-input" type="number" name="price" placeholder="price" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Sure to modify ?')" name="submit" value="Modify"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Really want to clear form ?')" value="Clear" />
</form>

<?php modifybook(); ?>