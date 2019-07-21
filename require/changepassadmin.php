
<?php
if($_SESSION['user']=='admin')
{
    echo '<br/><h5>Change Password :</h5>
    <form class="form" method="post">
        <input class="search-form-input" placeholder="Enter New Password" type="password" name="pass1"><br/>
        <input class="search-form-input" type="password" placeholder="Repeat New Password" name="pass2"><br/>
        <input class="search-form-button" type="submit" name="submit" value="Change Now">
    </form>';
}
?>
<?php 
if($_POST['pass1'] && $_POST['pass2']){
    if($_POST['pass1']!=$_POST['pass2'])
    {
        echo "Passwords doesnot Matched !";
    }
    else
    {
        require_once '../functions/database.php';
        $query="update admin_login set pass='".$_POST['pass1'] ."' where logid=".$_SESSION['logid'].";";
        connect();
        tableprint($query);
        echo "Password Changed !";
    }
}
 
?>