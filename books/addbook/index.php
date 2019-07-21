<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';
?>



<form class="form pagecenter" method="post" action="<?php $_PHP_SELF  ?>" id="addbook" >
    <label class="textbox">Add New Book</label><br/>
    <input class="search-form-input" type="number" name="id" placeholder="id" /><br/>
    <input class="search-form-input" type="text" name="title" placeholder="title" /><br/>
    <input class="search-form-input" type="text" name="publication" placeholder="publication" /><br/>
    <input class="search-form-input" type="number" name="edition" placeholder="edition" /><br/>
    <select class="search-form-input" name="branch" id="branch">
        <option >Select Branch</option>
        <option value="cse">CSE</option>
        <option value="ece" >ECE</option>
        <option value="eee">EEE</option>
        <option value="mech">MECH</option>
        <option value="civil">CIVIL</option>
        <option value="mba">MBA</option>
        <option value="h&s">H&S</option>
        <option value="other">OTHER</option>
    </select><br/>
    <input class="search-form-input" type="number" name="number_of_books" placeholder="no of books" /><br/>
    <input class="search-form-input" type="number" name="price" placeholder="price" /><br/>
    <input class="search-form-button" type="submit" onclick="return confirm ('Confirm to Add the book ?')"  name="submit" value="Add"/>
    <input class="search-form-button" type="reset" value="Clear" onclick="return confirm ('Really want to clear form ?')" />
</form>
<?php
        addbook();  
?>
<br/><br/><br/>
