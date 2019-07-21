<head>
        <title>Library System - Teacher</title>
    </head>
    
    
 <?php
 session_start();
 
    if($_POST['uname']&&$_POST['password']&&$_POST['logid'])
    {
        
        $conn=mysqli_connect('127.0.0.1','admin','LibrarySystem1!','library') or die ("wrong entry");
        $query='select pass from teacher_login where uname="'.$_POST['uname'].'" and logid= '.$_POST['logid'].' ;';
        
        $result = mysqli_query($conn,$query) or die('Query  failed:'.mysqli_error());
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC))
         {

            foreach ($line as $col_value) 
                {
               if($col_value==$_POST['password'])
               {
                   $_SESSION['user']='teacher';
                   $_SESSION['username']='TEACHER';
                   $_SESSION['pass']='TeacherLogin1!';
                   $_SESSION['logid']=$_POST['logid'];
                   echo 'Welcome : '.$_POST['uname'];
               }
               
                }
        }
             mysqli_free_result($result);
            
    }
    require_once '../functions/database.php';
            include("../pagelayout/footer.php");
      include("../pagelayout/header.php");
      if($_SESSION['user']=='teacher')  
      {
      teacherdetail($_SESSION['logid']);      
        teacherissued($_SESSION['logid']);
        require_once ("../require/changepassteach.php");
      }
    
    
        
    
    
  
    
?>
<?php
if($_SESSION['user']=='admin'){
         if($_SESSION['user']=='admin'){
             require_once '../functions/teacherdbaction.php';
}
  
    }
?>
    
    <?php
if($_SESSION['user']=='guest'){   
    $host=$_SERVER['HTTP_HOST'];
header("location:http://$host/login/teacher/index.php");
exit();
}
  
    
?>
<br/><br/><br/><br/>
</html>


