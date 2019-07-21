<?php include("../../pagelayout/footer.php");
      include("../../pagelayout/header.php"); ?>
<label class="textbox">Administrator Login</label>
<form class="form" method="post" action="/login/admin.php" id="adminlogin">
    <input class="search-form-input" type="number"  name="logid" placeholder="logid"/>
    <input class="search-form-input" type="text" name="uname" placeholder="uname"/>
    <input class="search-form-input" type="password" name="password" placeholder="password"/>
    <input class="search-form-button" type="submit"  name="submit"/>
    <input class="search-form-button" type="reset" value="Clear" />
</form>