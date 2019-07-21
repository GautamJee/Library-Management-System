<?php
session_start();
error_reporting();

function connect()
{
     $_SESSION['conn']=mysqli_connect('localhost',$_SESSION['user'],$_SESSION['pass'],'library') or die ("<a href='/'>Could not connect to database !</a>");
}

function tableprint($query)
{
    connect();
    $result = mysqli_query($_SESSION['conn'],$query) or die("Cannot Perform Action ! Try Again !<br/><br/><br/>".mysqli_error());
    // Printing results in HTML
       echo "<table>";
       while ($line = mysqli_fetch_object($result))
        {
           echo "\t<tr>\n";
            foreach ($line as $col_value)
                {
                    echo "\t\t<td>$col_value</td>\n";
                }
                echo "\t</tr>\n";
        }
        echo "</table>\n<hr/><hr/><hr/>";
        mysqli_free_result($result);

}

function allstudents()
{

       $query = "SELECT * FROM student";
    tableprint($query);


}

function searchallstudent($s_id)
{
    studentdetail($s_id);
    studentissued($s_id);
}


function searchallstudenthtno($htno)
{
       $query = "SELECT * FROM student where htno= '".$htno."';";
       tableprint($query);
}




function allbooks()
{

$query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books order by btitle";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books order by btitle";
// $query = "SELECT b.bid, b.btitle, ba.author,b.number_of_books FROM books b , book_author ba where b.bid=ba.bid ";
       tableprint($query);
       
       
}


function searchallbook($bookid)
{
       $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE bid= $bookid order by btitle ;";
       tableprint($query);
       if($_SESSION['user']=='admin')
           issuedto($bookid);
}

function eceallbooks()
{
      $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='ece' order by btitle order by btitle";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='ece' order by btitle" ;
       tableprint($query);
}

function cseallbooks()
{
       $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='cse' order by btitle";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='cse' order by btitle";
       tableprint($query);
}

function managementallbooks()
{
       $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='mba'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='mba'";
       tableprint($query);
}

function searchecebook($bookid)
{
        $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='ece' and bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE branch='ece' and bid= $bookid ;";
       tableprint($query);
}

function searchcsebook($bookid)
{
       $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='cse' and bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE branch='cse' and bid= $bookid ;";
       tableprint($query);
}

function searchmanagementbook($bookid)
{
       $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='mba' and bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE branch='mba' and bid= $bookid ;";
       tableprint($query);

}

function searcheeebook($bookid)
{
       $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='eee' and bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE branch='eee' and bid= $bookid ;";
       tableprint($query);
}

function eeeallbooks()
{
      $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='eee'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch ='eee'";
       tableprint($query);

}


function searchmechbook($bookid)
{
       $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='mech' and bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE branch='mech' and bid= $bookid ;";
       tableprint($query);
}

function mechallbooks()
{
       $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='mech'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='mech'";
       tableprint($query);
}

function searchcivilbook($bookid)
{
   $query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='civil' and bid=".$bookid.";";
       if($_SESSION['user']=='admin'){
           $query ="SELECT * FROM books WHERE branch='civil' and bid= $bookid ;";
       }
    
       tableprint($query);
}

function civilallbooks()
{
       $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='civil'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='civil'";
       tableprint($query);
}



function searchhnsbook($bookid)
{

       $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='h&s'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='h&s' and bid=".$bookid;
       tableprint($query);
}

function allhnsbooks()
{

       $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='h&s'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='h&s'";
       tableprint($query);
}


function searchotherbook($bookid)
{
       $$query ="SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='other' and bid=".$bookid.";";
       if($_SESSION['user']=='admin')
    $query ="SELECT * FROM books WHERE branch='other' and bid= $bookid ;";
       tableprint($query);
}

function allotherbooks()
{
        $query = "SELECT bid, btitle, publication, edition, branch,number_of_books FROM books where branch='other'";
if($_SESSION['user']=='admin')
    $query = "SELECT * FROM books where branch='other'";
       tableprint($query);
}

function allbtechstudents()
{
       $query = "SELECT * FROM student where dept='btech'";
       tableprint($query);
}


function alldiplomastudents()
{
       $query = "SELECT * FROM student where dept='diploma'";
       tableprint($query);
}

function studentcontact($sid)
{
    echo 'Contact :';
    $query="Select phone from student_contact where sid= $sid";
    tableprint($query);
}

function searchbtechstudent($s_id)
{
       $query = "SELECT * FROM student where dept='btech' and sid=$s_id";
       tableprint($query);
       studentcontact($s_id);
       studentissued($s_id);
       
}


function allmtechstudents()
{
       $query = "SELECT * FROM student where dept='mtech'";
       tableprint($query);
}

function searchmtechstudent($s_id)
{
       $query = "SELECT * FROM student where dept='mtech' and sid=$s_id";
       tableprint($query);
       
       studentcontact($s_id);
       studentissued($s_id);
}

function searchbtechcivilstudent($s_id)
{
    $query = "SELECT * FROM student where dept='btech' and branch='civil' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allbtechcivilstudents(){
    $query = "SELECT * FROM student where dept='btech' and branch='civil'";
    tableprint($query);
}

function searchbtechcsestudent($s_id)
{
    $query = "SELECT * FROM student where dept='btech' and branch='cse' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allbtechcsestudents(){
    $query = "SELECT * FROM student where dept='btech' and branch='cse'";
    tableprint($query);
}


function searchbtechecestudent($s_id)
{
    $query = "SELECT * FROM student where dept='btech' and branch='ece' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allbtechecestudents(){
    $query = "SELECT * FROM student where dept='btech' and branch='ece'";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}


function searchbtecheeestudent($s_id)
{
    $query = "SELECT * FROM student where dept='btech' and branch='eee' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allbtecheeestudents(){
    $query = "SELECT * FROM student where dept='btech' and branch='eee'";
    tableprint($query);
}


function searchbtechmechstudent($s_id)
{
    $query = "SELECT * FROM student where dept='btech' and branch='mech' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allbtechmechstudents(){
    $query = "SELECT * FROM student where dept='btech' and branch='mech'";
    tableprint($query);
}


function searchmtechcivilstudent($s_id)
{
    $query = "SELECT * FROM student where dept='mtech' and branch='civil' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allmtechcivilstudents(){
    $query = "SELECT * FROM student where dept='mtech' and branch='civil'";
    tableprint($query);
}

function searchmtechcsestudent($s_id)
{
    $query = "SELECT * FROM student where dept='mtech' and branch='cse' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allmtechcsestudents(){
    $query = "SELECT * FROM student where dept='mtech' and branch='cse'";
    tableprint($query);
}


function searchmtechecestudent($s_id)
{
    $query = "SELECT * FROM student where dept='mtech' and branch='ece' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allmtechecestudents(){
    $query = "SELECT * FROM student where dept='mtech' and branch='ece'";
    tableprint($query);
}


function searchmtecheeestudent($s_id)
{
    $query = "SELECT * FROM student where dept='mtech' and branch='eee' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allmtecheeestudents(){
    $query = "SELECT * FROM student where dept='mtech' and branch='eee'";
    tableprint($query);
}


function searchmtechmechstudent($s_id)
{
    $query = "SELECT * FROM student where dept='mtech' and branch='mech' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function allmtechmechstudents(){
    $query = "SELECT * FROM student where dept='mtech' and branch='mech'";
    tableprint($query);
}



function searchdiplomastudent($s_id)
{
       $query = "SELECT * FROM student where dept='diploma' and sid=$s_id";
       tableprint($query);
       
       studentcontact($s_id);
       studentissued($s_id);
}


function searchdiplomacivilstudent($s_id)
{
    $query = "SELECT * FROM student where dept='diploma' and branch='civil' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function alldiplomacivilstudents(){
    $query = "SELECT * FROM student where dept='diploma' and branch='civil'";
    tableprint($query);
}

function searchdiplomaecestudent($s_id)
{
    $query = "SELECT * FROM student where dept='diploma' and branch='ece' and sid=$s_id";
    tableprint($query);
       studentcontact($s_id);
       studentissued($s_id);
}

function alldiplomaecestudents(){
    $query = "SELECT * FROM student where dept='diploma' and branch='ece'";
    tableprint($query);
}


function searchdiplomacmestudent($s_id)
{
    $query = "SELECT * FROM student where dept='diploma' and branch='cme' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function alldiplomacmestudents(){
    $query = "SELECT * FROM student where dept='diploma' and branch='cme'";
    tableprint($query);
}

function searchdiplomaeeestudent($s_id)
{
    $query = "SELECT * FROM student where dept='diploma' and branch='eee' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function alldiplomaeeestudents(){
    $query = "SELECT * FROM student where dept='diploma' and branch='eee'";
        tableprint($query);
}



function searchdiplomamechstudent($s_id)
{
    $query = "SELECT * FROM student where dept='diploma' and branch='mech' and sid=$s_id";
    tableprint($query);
    
       studentcontact($s_id);
       studentissued($s_id);
}

function alldiplomamechstudents(){
    $query = "SELECT * FROM student where dept='diploma' and branch='mech'";
    tableprint($query);
}

function teacherdbconnect()
{

    $_SESSION['conn']=mysqli_connect('localhost','teacher','TeacherLibarary1!','library') or die ("Could not connect to database as teacher");
}

function studentdbconnect(){
    $_SESSION['conn']= mysqli_connect('localhost', 'student', 'StudentLogin1!', 'library') or die ("Could not connect to database as student");
}

function studentissued($sid){
    echo '<h4>Books issued / return</h4>';
    $query = "SELECT b.bid,b.btitle,b.publication,b.edition,si.issdate,si.retdate from student_issue si,books b where si.sid = ". $sid ." and b.bid=si.bid ;";
    tableprint($query);
}


function studentdetail($sid)
{
    echo '<h4>Student Details</h4><br/>';
    $query="SELECT *  from  student where sid=".$sid.";";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  student_contact where sid=".$sid.";";
    tableprint($query);
}




function studentdetailhtno($htno)
{
    echo '<h4>User Details</h4><br/>';
    $query="SELECT *  from  student where htno='".$htno."';";
    tableprint($query);

}

function teacherissued($tid){
    echo '<h4>Books issued / return</h4>';
    $query = "SELECT b.bid,b.btitle,b.publication,b.edition,ti.issdate,ti.retdate from teacher_issue ti,books b where ti.tid = ". $tid ." and b.bid=ti.bid ;";
    tableprint($query);
    echo '<hr/><hr/><hr/>';
}


function teacherdetail($tid)
{
    echo '<h4>User Details</h4><br/>';
    $query="SELECT *  from  teacher where tid=".$tid.";";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$tid.";";
    tableprint($query);
}



function addevent()
{
    if($_POST['title']&&$_POST['date'])
{
    $query="INSERT INTO `event` (`id`, `title`, `detail`, `contact`, `ondate`) VALUES (NULL, '".$_POST['title']."', '".$_POST['detail']."', '".$_POST['contact']."', '".$_POST['date']."');";
    tableprint($query);
    echo " Event added Successfully !";
    $query="select * from event where ondate='".$_POST['date']."';";
    tableprint($query);
}
}

function allevent()
{
    $query="select * from event";
    tableprint($query);
}


function searchevent($id)
{
    $query="select * from event where id=".$id;
    tableprint($query);
}


function updateevent()
{

    if($_POST['id']!=null&&$_POST['title']!=null&&$_POST['date']!=null)
{
        $query="UPDATE event SET title = '".$_POST['title']."', detail = '".$_POST['detail']."', contact = '".$_POST['contact']."', ondate = '".$_POST['date']."' WHERE id = ".$_POST['id'].";";
     tableprint($query);
    echo "Event updated Successfully !";
    searchevent($_POST[id]);

}

}


function deleteevent()
{
    if($_POST['id'])
{
    $query="DELETE FROM `event` WHERE `event`.`id` =".$_POST['id'].";";
    searchevent($_POST['id']);
    tableprint($query);
    echo "Event deleted Successfully !";
}
}


function printcontact()
{

 if($_SESSION['username']=='TEACHER')
 {
     connect();
     $query="Select name,branch from teacher where tid=".$_SESSION['logid'].";";
     $result = mysqli_query($_SESSION['conn'],$query) or die("Access Denied !- <a href='/login/teacher/'>Login Again!</a>".mysqli_error());
     $line = mysqli_fetch_row($result);
             foreach ($line as $col_value) {
                   echo " - ".$col_value." - ";
             }
             return;
 }

 if($_SESSION['username']=='ADMIN')
 {
     connect();
     $query="Select name from admin where id=".$_SESSION['logid'].";";
     $result = mysqli_query($_SESSION['conn'],$query) or die("Access Denied !- <a href='/login/admin/'>Login Again!</a>".mysqli_error());
     $line = mysqli_fetch_row($result);
     echo "librarian";
             foreach ($line as $col_value) {
                   echo " - ".$col_value." - ";
             }
             return;
 }

}


function admindetail($id)
{
    echo '<h4>User Details</h4><br/>';
    $query="SELECT *  from  admin where id=".$id.";";
    tableprint($query);
}



function addbook()
{
    if($_POST['title'] && $_POST['id'])

{

   $query="INSERT INTO `books` (`bid`, `btitle`, `publication`, `edition`, `branch`, `number_of_books`, `price`, `lastmodified`) VALUES ('".$_POST['id']."', '".$_POST['title']."', '".$_POST['publication']."', '".$_POST['edition']."', '".$_POST['branch']."', '".$_POST['number_of_books']."', '".$_POST['price']."', CURRENT_TIMESTAMP);";
     tableprint($query);
     echo 'Book added !';
     $query="select * from books where bid=".$_POST['id'].";";
     tableprint($query);
     
}
}

function removebook()
{
    if($_POST['id']!=NULL)
{
    $query="DELETE FROM `books` WHERE `bid` =".$_POST['id'].";";
    searchallbook($_POST['id']);
    tableprint($query);

    echo 'Book Removed !';
}
}


function modifybook()
{

    if($_POST['id']!=null&&$_POST['title']!=null)
{
        $query="UPDATE `books` SET `btitle` = '".$_POST['title']."', `publication` = '".$_POST['publication']."', `edition` = '".$_POST['edition']."', `branch` = '".$_POST['branch']."' , `number_of_books` = '".$_POST['number_of_books']."' , `price` = '".$_POST['price']."' WHERE `books`.`bid` = ".$_POST['id'].";";
     tableprint($query);
    echo "Book details updated Successfully !";
    searchallbook($_POST['id']);
}

}


function allteachers()
{

       $query = "SELECT * FROM teacher";
    tableprint($query);


}


function searchallteacher($t_id)
{
    teacherdetail($t_id);
    teacherissued($t_id);
}



function searchcseteacher($t_id)
{
    
    echo '<h4>User Details</h4><br/>';
    $query="SELECT *  from  teacher where branch='cse' and tid=".$t_id.";";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}





function searcheceteacher($t_id)
{
       
       echo '<h4>User Details</h4><br/>';
    $query = "SELECT * FROM teacher where branch='ece' and tid=$t_id";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}


function searchmechteacher($t_id)
{
       
       echo '<h4>User Details</h4><br/>';
    $query = "SELECT * FROM teacher where branch='mech' and tid=$t_id";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}


function searcheeeteacher($t_id)
{
       echo '<h4>User Details</h4><br/>';
    $query = "SELECT * FROM teacher where branch='eee' and tid=$t_id";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}


function searchcivilteacher($t_id)
{
       
       echo '<h4>User Details</h4><br/>';
    $query = "SELECT * FROM teacher where branch='civil' and tid=$t_id";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}


function searchhnsteacher($t_id)
{
       
       echo '<h4>User Details</h4><br/>';
    $query = "SELECT * FROM teacher where branch='hns' and tid=$t_id";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}




function searchmbateacher($t_id)
{
       
       echo '<h4>User Details</h4><br/>';
    $query = "SELECT * FROM teacher where dept='mba' and tid=$t_id";
    tableprint($query);
    echo 'Contact : ';
    $query="SELECT phone  from  teacher_contact where tid=".$t_id.";";
    tableprint($query);
    teacherissued($t_id);
}


function addstudent()
{
    if($_POST['htno']!=null && $_POST['sname']!=null)
{
    $query="INSERT INTO `student` VALUES (NULL, '".$_POST['htno']."', '".$_POST['sname']."', '".$_POST['dept']."', '".$_POST['reg']."', '".$_POST['branch']."', ".$_POST['year']." , ".$_POST['sem'].");";
    if($_POST['dept']=='diploma')
    {    
        $query="INSERT INTO `student` VALUES (NULL, '".$_POST['htno']."', '".$_POST['sname']."', '".$_POST['dept']."', '".$_POST['reg']."', '".$_POST['branch']."', NULL , ".$_POST['sem'].");";
        if($_POST['year']=='1')
            $query="INSERT INTO `student` VALUES (NULL, '".$_POST['htno']."', '".$_POST['sname']."', '".$_POST['dept']."', '".$_POST['reg']."', '".$_POST['branch']."', ".$_POST['year']." , NULL);";
            
    }
            
    if($_POST['dept']=='mtech')
            $query="INSERT INTO `student` VALUES (NULL, '".$_POST['htno']."', '".$_POST['sname']."', '".$_POST['dept']."', '".$_POST['reg']."', '".$_POST['branch']."', NULL , ".$_POST['sem'].");";
    if($_POST['dept']=='mba')
            $query="INSERT INTO `student` VALUES (NULL, '".$_POST['htno']."', '".$_POST['sname']."', '".$_POST['dept']."', '".$_POST['reg']."', NULL, NULL , ".$_POST['sem'].");";
    if($_POST['dept']=='btech'&&($_POST['reg']=='R07'||$_POST['reg']=='R13'||$_POST['reg']=='R09'||$_POST['reg']=='R15')&&$_POST['year']=='1')
            $query="INSERT INTO `student` VALUES (NULL, '".$_POST['htno']."', '".$_POST['sname']."', '".$_POST['dept']."', '".$_POST['reg']."', '".$_POST['branch']."', ".$_POST['year']." , NULL);";
    tableprint($query);
    echo " Student added Successfully !";
    searchallstudenthtno($_POST['htno']);
}
}

function removestudent()
{
    if($_POST['sid']!=null && $_POST['htno']!=null && $_POST['sname']!=null)
{
        $temp="select * from student where sname='".$_POST['sname']."' and sid=".$_POST['sid']." and htno='".$_POST['htno']."';";
       tableprint(($temp));
       studentissued($_POST['sid']);
    $query="DELETE FROM student WHERE sname='".$_POST['sname']."' and sid =".$_POST['sid']." and htno = '".$_POST['htno']."' ;";
    tableprint($query);
    echo "Student deleted Successfully !";
}
}

function modifystudent()
{

    if($_POST['sid']!=null&&$_POST['sname']!=null&&$_POST['htno']!=null)
    {
            studentdetail($_POST['sid']);
            $query="UPDATE student SET htno = '".$_POST['htno']."', sname = '".$_POST['sname']."', dept = '".$_POST['dept']."', reg = '".$_POST['reg']."', branch = '".$_POST['branch']."', year = ".$_POST['year'].", sem = ".$_POST['sem']." WHERE student.sid = ".$_POST['sid'].";";
        if($_POST['dept']=='diploma')
        {    
            $query="UPDATE student SET htno = '".$_POST['htno']."', sname = '".$_POST['sname']."', dept = '".$_POST['dept']."' , reg = '".$_POST['reg']."', branch = '".$_POST['branch']."', year = NULL , sem = ".$_POST['sem']." WHERE student.sid = ".$_POST['sid'].";";
            if($_POST['year']=='1')
                $query="UPDATE student SET htno = '".$_POST['htno']."', sname = '".$_POST['sname']."', dept = '".$_POST['dept']."' , reg = '".$_POST['reg']."', branch = '".$_POST['branch']."', year = '".$_POST['year']."', sem = NULL WHERE student.sid = ".$_POST['sid'].";";

        }

        if($_POST['dept']=='mtech')
                $query="UPDATE student SET htno = '".$_POST['htno']."', sname = '".$_POST['sname']."', dept = '".$_POST['dept']."' , reg = '".$_POST['reg']."', branch = '".$_POST['branch']."', year = NULL , sem = ".$_POST['sem']. " WHERE student.sid = ".$_POST['sid'].";";
        if($_POST['dept']=='mba')
                $query="UPDATE student SET htno = '".$_POST['htno']."', sname = '".$_POST['sname']."', dept = '".$_POST['dept']."' , reg = '".$_POST['reg']."', branch = NULL, year = NULL , sem = ".$_POST['sem']." WHERE student.sid = ".$_POST['sid'].";";
        if($_POST['dept']=='btech'&&($_POST['reg']=='R07'||$_POST['reg']=='R13'||$_POST['reg']=='R09'||$_POST['reg']=='R15')&&$_POST['year']=='1')
                $query="UPDATE student SET htno = '".$_POST['htno']."', sname = '".$_POST['sname']."', dept = '".$_POST['dept']."' , reg = '".$_POST['reg']."', branch = '".$_POST['branch']."', year = '".$_POST['year']."' , sem = NULL WHERE student.sid = ".$_POST['sid'].";";
        tableprint($query);
        echo " Student's Details Updated Successfully!";
        searchallstudent($_POST['sid']);
    }   

}

function searchallteacheruid($uid)
{
       $query = "SELECT * FROM teacher where uid='".$uid."';";
       tableprint($query);
}


function addteacher()
{
    if($_POST['uid']&&$_POST['name'])
{
    $query="INSERT INTO teacher (tid,uid,name,dept,branch)  VALUES ( NULL , '".$_POST['uid']."', '".$_POST['name']."', '".$_POST['dept']."', '".$_POST['branch']."');";
    tableprint($query);
    echo " Teacher added Successfully !";
    teacherdetail($_POST['tid']);

}
}

function removeteacher()
{
    if($_POST['uid']&&$_POST['tid']&&$_POST['name'])
{
       $temp="select * from teacher where uid='".$_POST['uid']."' and tid=".$_POST['tid'].";";
       tableprint(($temp));
       teacherissued($_POST['tid']);
    $query="DELETE FROM teacher WHERE uid ='".$_POST['uid']."' and  tid =".$_POST['tid']." and name = '".$_POST['name']."';";
    tableprint($query);
    echo "Teacher deleted Successfully !";
}
}

function modifyteacher()
{

    if($_POST['uid']&&$_POST['tid']&&$_POST['name'])
{
        searchallteacher($_POST['tid']);
        $query="UPDATE teacher set uid='".$_POST['uid']."' , name = '".$_POST['name']."' , dept = '".$_POST['dept']."' , branch = '".$_POST['branch']."' where teacher.tid=".$_POST['tid']." ; ";
     tableprint($query);
    echo "Teacher Details updated Successfully !";
    teacherdetail($_POST['tid']);
}

}


function passgenerator()
{
    
    echo random_int(11111111, 99999999);
}


function addstudentcontact()
{
    if($_POST['sid']!=null && $_POST['contact']!=null)
{
    $query="INSERT INTO `student_contact` VALUES ('".$_POST['sid']."', '".$_POST['contact']."');";
    tableprint($query);
    echo "Contact Added Successfully !";
    studentdetail($_POST['sid']);    
}
$_POST['sid']=null;
}


function updatestudentcontact()
{
    if($_POST['sid']!=null && $_POST['oldcontact']!=null && $_POST['newcontact']!=null)
{
    $query="update student_contact set phone = ".$_POST['newcontact']." where sid=".$_POST['sid']." and phone= ".$_POST['oldcontact'].";";
    tableprint($query);
    echo "Contact Updated Successfully !";
    studentdetail($_POST['sid']);
}
$_POST['sid']=null;
return;
}

function removestudentcontact()
{
    if($_POST['sid']!=null && $_POST['contact']!=null)
{
    $query="DELETE FROM student_contact WHERE sid = ".$_POST['sid']." AND phone = ".$_POST['contact'].";";
    tableprint($query);
    echo "Contact Deleted Successfully !";
    studentdetail($_POST['sid']);
}
$_POST['sid']=null;
}



function issueteacherbook()
{
    if($_POST['tid'])
        teacherissued($_POST['tid']);
    
    if($_POST['bid'])
    {
        echo '<br/>Requested book :';
        searchallbook($_POST['bid']);
    }
    
    if($_POST['bid'] && $_POST['tid'])
    {
        $query = "INSERT INTO teacher_issue(tid, bid, issdate, retdate) VALUES (".$_POST['tid'].",".$_POST['bid'].",CURRENT_TIMESTAMP, NULL);";
        tableprint($query);
        echo 'Book issued Successfully';
        teacherissued($_POST['tid']);
    }
        
}



function returnteacherbook()
{
    if($_POST['tid'])
        teacherissued($_POST['tid']);
    
    if($_POST['bid'])
    {
        echo '<br/>Book Returning :';
        searchallbook($_POST['bid']);
    }
    
    if($_POST['bid'] && $_POST['tid'])
    {
        $query = "delete from teacher_issue  where bid = ".$_POST['bid']." and tid=".$_POST['tid'].";";
        tableprint($query);
        echo 'Book Returned Successfully !';
        teacherissued($_POST['tid']);
    }
        
}





function issuestudbook()
{
    if($_POST['sid'])
        studentissued($_POST['sid']);
    
    if($_POST['bid'])
    {
        echo '<br/>Requested book :';
        searchallbook($_POST['bid']);
    }
    
    if($_POST['bid'] && $_POST['sid'])
    {
        $query = "INSERT INTO student_issue(sid, bid, issdate, retdate) VALUES (".$_POST['sid'].",".$_POST['bid'].",CURRENT_TIMESTAMP, NULL);";
        tableprint($query);
        echo 'Book issued Successfully';
        studentissued($_POST['sid']);
    }
        
}



function returnstudbook()
{
    if($_POST['sid'])
        studentissued($_POST['sid']);
    
    if($_POST['bid'])
    {
        echo '<br/>Book Returning :';
        searchallbook($_POST['bid']);
    }
    
    if($_POST['bid'] && $_POST['sid'])
    {
        $query = "delete from student_issue  where bid = ".$_POST['bid']." and sid=".$_POST['sid'].";";
        tableprint($query);
        echo 'Book Returned Successfully !';
        studentissued($_POST['sid']);
    }
        
}




function addteachercontact()
{
    if($_POST['tid']!=null && $_POST['contact']!=null)
{
    $query="INSERT INTO `teacher_contact` VALUES ('".$_POST['tid']."', '".$_POST['contact']."');";
    tableprint($query);
    echo "Contact Added Successfully !";
    teacherdetail($_POST['tid']);    
}
$_POST['tid']=null;
}


function updateteachercontact()
{
    if($_POST['tid']!=null && $_POST['oldcontact']!=null && $_POST['newcontact']!=null)
{
    $query="update teacher_contact set phone = ".$_POST['newcontact']." where tid=".$_POST['tid']." and phone= ".$_POST['oldcontact'].";";
    tableprint($query);
    echo "Contact Updated Successfully !";
    teacherdetail($_POST['tid']);
}
$_POST['tid']=null;
return;
}

function removeteachercontact()
{
    if($_POST['tid']!=null && $_POST['contact']!=null)
{
    $query="DELETE FROM teacher_contact WHERE tid = ".$_POST['tid']." AND phone = ".$_POST['contact'].";";
    tableprint($query);
    echo "Contact Deleted Successfully !";
    teacherdetail($_POST['tid']);
}
$_POST['tid']=null;
}



function allhnsteachers()
{
     $query = "SELECT * FROM teacher where branch='h&s'";
    tableprint($query);
}


function allcseteachers()
{
     $query = "SELECT * FROM teacher where branch='cse'";
    tableprint($query);
}


function alleceteachers()
{
     $query = "SELECT * FROM teacher where branch='ece'";
    tableprint($query);
}


function alleeeteachers()
{
     $query = "SELECT * FROM teacher where branch='eee'";
    tableprint($query);
}

function allmechteachers()
{
     $query = "SELECT * FROM teacher where branch='mech'";
    tableprint($query);
}


function allcivilteachers()
{
     $query = "SELECT * FROM teacher where branch='civil'";
    tableprint($query);
}


function allmbateachers()
{
     $query = "SELECT * FROM teacher where dept='mba'";
    tableprint($query);
}


function issuedto($bid)
{
    echo 'Issued to Teachers';
    $query="select teacher_issue.tid from teacher_issue,books where teacher_issue.bid=books.bid and teacher_issue.bid=".$bid.";";
    tableprint($query);
    echo 'Issued to Students';
    $query="select student_issue.sid , student.htno , student.sname  from student_issue , student , books where student_issue.bid=books.bid and student_issue.sid=student.sid and student_issue.bid=".$bid.";";
    tableprint($query);
}


function addmagazine()
{
    if($_POST['title'] && $_POST['published_on'] && $_POST['number_of_copies'])
    {
       $query="INSERT INTO `magazines` (`id`, `title`, `publication`, `edition`, `published_on`, `price`, `no_of_copies`) VALUES (NULL, '".$_POST['title']."','".$_POST['publication']."', ".$_POST['edition'].", '".$_POST['published_on']."', ".$_POST['price'].", '".$_POST['number_of_copies']."') ";
         tableprint($query);
         echo 'Magazine added !';
         $query="select * from magazines where title = '".$_POST['title']."'  order by title;";
         tableprint($query);
    }
}


function allmagazines()
{
    $query="select * from magazines order by title;";
    tableprint($query);
}



function searchallmagazine($id)
{
    $query="select * from magazines where id = ".$id." order by title;";
    tableprint($query);
}

/*
function searchallmagazine($title)
{
    $query="select * from magazines where title = '".$id."' order by title;";
    tableprint($query);
}*/

function removemagazine()
{
    if($_POST['id']!=NULL)
{
    $query="DELETE FROM `magazines` WHERE `id` =".$_POST['id'].";";
    searchallmagazine($_POST['id']);
    tableprint($query);
    echo 'Magazine Removed !';
}
}



function modifymagazine()
{

    if($_POST['id'] && $_POST['title'] && $_POST['published_on'] && $_POST['number_of_copies'])
{
        $query="UPDATE `magazines` SET `title` = '".$_POST['title']."', `publication` = '".$_POST['publication']."', `edition` = '".$_POST['edition']."', `published_on` = '".$_POST['published_on']."' , `price` = '".$_POST['price']."' , `no_of_copies` = '".$_POST['number_of_copies']."' WHERE `magazines`.`id` = ".$_POST['id'].";";
     tableprint($query);
    echo "Magazine details updated Successfully !";
    searchallmagazine($_POST['id']);
}

}













function addjournal()
{
    if($_POST['title'] && $_POST['published_on'] && $_POST['number_of_copies'] && $_POST['price'] && $_POST['publication'] && $_POST['edition'])
    {
       $query="INSERT INTO `journals` (`id`, `title`, `publication`, `edition`, `published_on`, `price`, `no_of_copies`) VALUES (NULL, '".$_POST['title']."', '".$_POST['publication']."', ".$_POST['edition'].", '".$_POST['published_on']."', '".$_POST['price']."' , '".$_POST['number_of_copies']."' ) ;" ;
         tableprint($query);
         echo 'Journal added !';
         $query="select * from journals where title = '".$_POST['title']."'  order by title;";
         tableprint($query);
    }
}


function alljournals()
{
    $query="select * from journals  order by title;";
    tableprint($query);
}



function searchalljournal($id)
{
    $query="select * from journals where id = ".$id." order by title;";
    tableprint($query);
}

/*
function searchalljournal($title)
{
    $query="select * from journals where title = '".$id."'  order by title;";
    tableprint($query);
}*/

function removejournal()
{
    if($_POST['id']!=NULL)
{
    $query="DELETE FROM `journals` WHERE `id` =".$_POST['id']."  order by title;";
    searchalljournal($_POST['id']);
    tableprint($query);
    echo 'Journal Removed !';
}
}



function modifyjournal()
{

    if($_POST['id'] && $_POST['title'] && $_POST['published_on'] && $_POST['number_of_copies'] && $_POST['price'] && $_POST['publication'] && $_POST['edition'])
{
        $query="UPDATE `journals` SET `title` = '".$_POST['title']."', `publication` = '".$_POST['publication']."', `edition` = ".$_POST['edition'].", `published_on` = '".$_POST['published_on']."' , `price` = '".$_POST['price']."' , `no_of_copies` = ".$_POST['number_of_copies']." WHERE `journals`.`id` = ".$_POST['id']." ;";
     tableprint($query);
    echo "Journal details updated Successfully !";
    searchalljournal($_POST['id']);
}

}




?>
