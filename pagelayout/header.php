<?php
session_start();

?>

<html>
    <link  rel = "stylesheet" type = "text/css" href = "/css/style.css">
    <div class="header">

    <a title="HOME" href="/"><img class="logo_img" src="/images/logo/Books.png" alt="logo" title="LIBRARY SYSTEM"></a>
    <table class="box headertable">
            <tr class="headertr">   
                <?php
                if($_SESSION['user']!='admin')
                {
                    ?>
                <td class="dropdown headertd">
                    <a href="/about/" class="nolink dropbtn" title="About">ABOUT</a>
                </td>
                <?php
                }
                ?>
                <td class="dropdown headertd">
                    <a class="dropbtn nolink" href="/books/" title="books">BOOKS</a>
                    <div class="dropdown-content">
                        <a href="/books/cse/" title="cse">CSE</a>
                        <a href="/books/management/" title="management">Management</a>
                        <a href="/books/ece/" title="ece">ECE</a>
                        <a href="/books/eee/" title="eee">EEE</a>
                        <a href="/books/mech/" title="mech">Mech</a>
                        <a href="/books/civil/" title="civil">CIVIL</a>
                        <a href="/books/h&s/" title="h&s">H&S</a>
                        <a href="/books/other" title="other">OTHER</a>
                        <?php if($_SESSION['user']=='admin')
                        {
                            echo '<a href="/books/addbook/" title="addbook">Add</a>';
                            echo '<a href="/books/removebook/" title="remove">Remove</a>';
                            echo '<a href="/books/modifybook/"   title="updatebook">Update</a>';
                        }
                        ?>
                        
                    </div>
                </td>
                <?php 
                if($_SESSION['user']=='admin')
                {
                    ?>
                <td class="dropdown headertd">
                    <a class="dropbtn nolink" href="/students/" title="students">STUDENTS</a>
                    <div class="dropdown-content">
                        <a href="/students/issue/" title="issue book">Issue Book</a>
                        <a href="/students/return/" title="return book">Return Book</a>
                        <a href="/students/btech/" title="btech">B.TECH.</a>
                        <a href="/students/diploma/" title="diploma">DIPLOMA</a>
                        <a href="/students/mtech/" title="mtech">M.TECH.</a>
                        <a href="/students/addstudent/"  title="addstudent">REGISTER</a>
                        <a href="/students/removestudent/"  title="removestudent">REMOVE</a>
                        <a href="/students/modifystudent/"  title="updatestudent">Update</a>
                    </div>
                </td>
                <td class="dropdown headertd">
                    <a class="dropbtn nolink" href="/teachers/" title="teachers">TEACHERS</a>
                    <div class="dropdown-content">
                        <a href="/teachers/issue/" title="issue book">Issue Book</a>
                        <a href="/teachers/return/" title="return book">Return Book</a>
                        <a href="/teachers/h&s/" title="h&s">H&S</a>
                        <a href="/teachers/cse/" title="cse">CSE</a>
                        <a href="/teachers/ece/" title="ece">ECE</a>
                        <a href="/teachers/eee/" title="eee">EEE</a>
                        <a href="/teachers/mech/" title="mech">MECH</a>
                        <a href="/teachers/civil/" title="civil">CIVIL</a>
                        <a href="/teachers/mba/" title="mba">MBA</a>
                        <a href="/teachers/addteacher/"  title="addteacher">REGISTER</a>
                        <a href="/teachers/removeteacher/"  title="removeteacher">REMOVE</a>
                        <a href="/teachers/modifyteacher/"  title="updateteacher">UPDATE</a>
                    </div>
                </td>
                <?php
                }
                ?>
                 <!-- <td class="dropdown headertd">

                    <a  class="nolink dropbtn" href="/events/" title="events">EVENTS</a>
                    <div class="dropdown-content">
                    <?php if($_SESSION['user']=='admin'||$_SESSION['user']=='teacher')
                    {
                            echo '<a href="/events/addevent/"  title="addevent">Add</a>';
                            echo '<a href="/events/removeevent/" title="remove">Remove</a>';
                            echo '<a href="/events/modifyevent/"  title="updateevent">UPDATE</a>';
                    }
                    ?>
                        </div>
                </td>
                  
                <td class="dropdown headertd">

                    <a  class="nolink dropbtn" href="/e-repository/" title="e-repositories">e-Repositories</a>
                </td>
                 -->
                 <td class="dropdown headertd">

                    <a  class="nolink dropbtn" href="/magazines/" title="magazines">MAGAZINES</a>
                    <div class="dropdown-content">
                    <?php if($_SESSION['user']=='admin')
                    {
                            echo '<a href="/magazines/addmagazine/" title="addmagazine">Add</a>';
                            echo '<a href="/magazines/removemagazine/"  title="removemagazine">Remove</a>';
                            echo '<a href="/magazines/modifymagazine/"  title="updatemagazine">UPDATE</a>';
                    }
                    ?>
                     </div>
                </td>
                 <td class="dropdown headertd">

                    <a  class="nolink dropbtn" href="/journals/" title="journals">JOURNALS</a>
                    <div class="dropdown-content">
                    <?php if($_SESSION['user']=='admin')
                    {
                            echo '<a href="/journals/addjournal/"  title="addjournal">Add</a>';
                            echo '<a href="/journals/removejournal/"  title="removejournal">Remove</a>';
                            echo '<a href="/journals/modifyjournal/"  title="updatejournal">UPDATE</a>';
                    }
                    ?>
                        </div>
                </td>
            </tr>
        </table>
    </div>
    <a href="/" class="logo_name">LIBRARY SYSTEM</a>
    
    <!-- to display the user which is logged in -->
    <div class="usershow">USER : <?php echo $_SESSION['username']." - ".$_SESSION['logid'] ?></div>
    
    <div class="share-buttons">
    <?php       
    if(!$_SESSION['user'])
    {
        connect();
    }
    if($_SESSION['user']=='guest')
    {echo '<table class="box login_as">
            <tr class="headertr">   
   <td class="dropdown headertd">
                    <a class="dropbtn nolink" title="login">Login</a>
                    <div class="dropdown-content">
                        <a href="/login/student/"   title="student_login">Student</a>
                        <a href="/login/teacher/"  title="teacher_login">Teacher</a>
                        <a href="/login/admin/"  title="admin_login">Admin</a>
                    </div>
       </td>
            </tr>
        </table>';}

    if($_SESSION['user']=='admin'|| $_SESSION['user']=='student' || $_SESSION['user']=='teacher') 
    {echo '<table class="box login_as">
            <tr class="headertr">   
   <td class="dropdown headertd">
                    <a class="dropbtn nolink" href="/login/logout/" >LOGOUT</a>
       </td>
            </tr>
        </table>';}
    ?>
    <?php /*  
    <!-- Email -->
    <a href="mailto:?Subject=Library System - by Gautam&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://fb.me/ahiddenpartofyourlife" target="_blank">
        <img  src="/images/share-buttons/Mail.png" alt="Email" />
    </a>
 
    <!-- Print -->
    <a href="#" onclick="window.print()">
        <img src="/images/share-buttons/print.png" alt="Print" />
    </a> */ ?>
</div>   
    <?php
    if($_SESSION['logid'])
    {
    echo '<div class="floatinglinks" > ';
        if($_SESSION['user']=='student')
            { 
                echo '<a  href="/login/student.php">User Details</a><br/>'; 
            }
        if($_SESSION['user']=='teacher')
        {
            echo '<a href="/login/teacher.php">User Details</a><br/>';
        }
        if($_SESSION['user']=='admin')
            {
                echo '<a href="/login/admin.php">User Details</a>';
                
            }
    echo '</div>';
    }
    ?>
            
</html>