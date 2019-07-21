<html>
    <head>
        <title>Contact Me</title>
    </head>
    <body>
        <?php
        require_once ("../pagelayout/header.php");
        require_once ("../pagelayout/footer.php");
        ?>

        <form class="form" method="post" action="<?php $_PHP_SELF ?>">
            <label>Send a mail</label><br/><br/>
            <input class="search-form-input" type="email" name="sender" placeholder="your mail id" /><br/>
            <input class="search-form-input" type="text" name="sub" placeholder="Subject" /><br/>
            <input  class="search-form-input" type="email" name="msg" placeholder="type your message here" /><br /><br />
            <input class="search-form-button" type="submit" name="submit" value="Send" onclick="return confirm('Send Message Now')"/>
            <input class="search-form-button" type="reset" name="reset" placeholder="Clear" onclick="return confirm('Clear Message ?')" />
        </form><br /><br />
        
<?php
if ($_POST['msg'] != null) {
    $to = "gautamkumarburman@rediffmail.com";
    $subject = $_POST['sub'];
    $message = "<b>Mail from  -- Library System --.</b>" . $_SESSION['user'] . $_SESSION['username'] . $_SESSION['userid'];
    $message .= "<h1>This is headline.</h1>" . $_POST['msg'];
    $header = "From:" . $_POST['sender'] . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail($to, $subject, $message, $header);
    if ($retval == true) {
        echo "Message sent successfully...";
    } else {

        echo "Message could not be sent...";
    }
}
?>




        <?php
        include_once "org_netbeans_saas_google/GoogleMapService.php";
        try {
            $address = "Arjun College of Technology and Science, Batasingaram, Hyderabad, India";
            $zoom = 15;
            $iframe = "true";

            $result = GoogleMapService::getGoogleMap($address, $zoom, $iframe);
            echo $result->getResponseBody();
        } catch (Exception $e) {
            echo "Exception occured: " . $e;
        }
        ?>


    </body>
</html>