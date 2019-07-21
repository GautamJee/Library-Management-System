<?php
 require_once ("../../pagelayout/header.php");
 require_once ("../../pagelayout/footer.php");
 require_once '../../functions/database.php';  
?>

<script type="text/javascript">
    
    
    
     
    function displayregbranch()
    {
        var dept=document.getElementById('dept').value;
        var regulationDisplay=document.getElementById('regulation');
        var branchDisplay = document.getElementById('branch');
        var branchresponse="<select  class='search-form-input' name='branch'><option>Select Branch</option>";
        var regulationresponse="<option>Regulation</option>";
        if(dept==='btech')
        {
            regulationresponse +='<option value="R07">R07</option><option value="R09">R09</option><option value="R13">R13</option><option value="R15">R15</option><option value="R16">R16</option>';
            branchresponse +=' <option value="cse">cse</option>        <option value="ece">ece</option>        <option value="mech">eee</option>        <option value="mech">mech</option>        <option value="mech">civil</option>';            
        }
        
        
            
        if(dept==='diploma'){
            regulationresponse +='<option value="ER-91">ER-91</option><option value="C09">C09</option><option value="C14">C14</option><option value="C16">C16</option>';
             branchresponse +='    <option value="cme">cme</option>        <option value="ece">ece</option>        <option value="mech">eee</option>        <option value="mech">mech</option>        <option value="mech">civil</option>';
        }
            
            
        
        if(dept==='mtech'){
            regulationresponse +='<option value="R09">R09</option><option value="R13">R13</option><option value="R15">R15</option>';
            branchresponse +='<option value="cse">cse</option>        <option value="ece">ece</option>        <option value="mech">eee</option>        <option value="mech">mech</option>        <option value="mech">civil</option>';
        }
        
        branchresponse+='</select>';
        
        if(dept==='mba')
        {   
            regulationresponse +='<option value="R09">R09</option><option value="R13">R13</option><option value="R15">R15</option>';
            branchresponse="<input type='hidden' value='null' name='branch' />";
        }
        regulationDisplay.innerHTML=regulationresponse;
        branchDisplay.innerHTML = branchresponse;        
    }
    
    function displayyear()
    {
        var dept=document.getElementById('dept').value;
        var reg=document.getElementById('regulation').value;
        var yearDisplay=document.getElementById('year');
        var yearresponse="<select onclick='displaysem();' class='search-form-input' id='yr'  name='year'><option>Select Year</option>";
        if(dept==='btech')
        {
            yearresponse +='<option value="1">1</option>        <option value="2">2</option>        <option value="3">3</option>        <option value="4">4</option>   ';
        }
        
        
            
        if(dept==='diploma')
        {
            var yearresponse="<select onclick='displaysem();' class='search-form-input' id='yr'  name='year'><option>Select Year</option><option value='1'>1</option>";
        }
            
        yearresponse+='</select>';
        
        if(dept==='mtech'){
            yearresponse="<input type='hidden' value='null' name='year' />";
            var semesterresponse;
            semesterresponse ='<select  class="search-form-input" name="sem"><option>Select Semester</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>';
            if(reg==='R09')
                semesterresponse ='<select  class="search-form-input" name="sem"><option>Select Semester</option><option value="1">1</option><option value="2">2</option></select>';
            var semesterDisplay=document.getElementById('semester');
            semesterDisplay.innerHTML = semesterresponse;
        }
        
        
        
        if(dept==='mba')
        {   
            yearresponse="<input type='hidden' value='null' name='year' />";
             var semesterresponse ='<select  class="search-form-input" name="sem"><option>Select Semester</option><option value="1">1</option><option value="2">2</option><option value="3">3</option>        <option value="4">4</option></select>';
            var semesterDisplay=document.getElementById('semester');
            semesterDisplay.innerHTML = semesterresponse;
        }
        yearDisplay.innerHTML=yearresponse;        
    }
    
    
   
    function displaysem()
    {
        
        var reg=document.getElementById('regulation').value;
        var dept=document.getElementById('dept').value;
        var year=document.getElementById('yr').value;
        var semesterDisplay=document.getElementById('semester');
        var semesterresponse="<select  class='search-form-input' name='sem'><option>Select Semester</option>";
        if(dept==='btech')
        {
            if(year==='1'&& (reg==='R07'||reg==='R13'||reg==='R15'||reg==='R09'))
            {
                semesterresponse +='</select>';
                semesterresponse ="<input type='hidden' value='null' name='semester' />";
            }
            else
                semesterresponse +='<option value="1">1</option><option value="2">2</option></select> ';
        }
        
        
            
        if(dept==='diploma')
        {
            if(year==='1')
            {
                semesterresponse +='</select>';
                semesterresponse="<input type='hidden' value='null' name='semester' />";
                
            }
            else
            {   
                semesterresponse +='<option value="3">3</option>        <option value="4">4</option><option value="5">5</option>        <option value="6">6</option>';
                if(reg==='ER-91')
                    semesterresponse +='<option value="7">7</option>';
                semesterresponse +='</select>';
            }
        }
        
        semesterDisplay.innerHTML=semesterresponse;
    }
    
    
    </script>


    <form class="form" method="post" action="<?php $_PHP_SELF ?>" id="addstudent" >
    <label class="textbox">Student Registration</label><br/>
    <input class="search-form-input" type="text" name="htno" placeholder="ht no" /><br/>
    <input class="search-form-input" type="text" name="sname" placeholder="name" /><br/>

    <select onkeydown="displayregbranch();" onkeyup="displayregbranch();" onkeypress="displayregbranch();" onclick="displayregbranch();"  class="search-form-input" id="dept" name="dept" >
        <option>Select Department</option>
        <option  value="btech">btech</option>
        <option value="mtech">mtech</option>
        <option value="diploma">diploma</option>
        <option value="mba">mba</option>
    </select><br/>
    <select onkeydown="displayyear();" onkeyup="displayyear();" onkeypress="displayyear();" onclick="displayyear();" class='search-form-input' name='reg' id="regulation">
        <option>Regulation</option>
    </select><br/>
    <div id="branch">
    </div>
    <div id="year" >
    </div>
    
    <div id="semester">
    </div>
    
    <input class="search-form-button" type="submit" onclick="return confirm ('Confirm to Add new Student ?')" name="submit" value="Add"/>
    <input class="search-form-button" type="reset" onclick="return confirm ('Really want to clear form ?')" value="Clear" />
</form>
<br/>
<?php
       
addstudent(); 
?>

<div class="floatinglinks" >
        <a href="/students/contact/add/">Add Contact</a><br/>
        <a href="/students/contact/update/">Update Contact</a><br/>
        <a href="/students/contact/remove/">Remove Contact</a>
</div>
<br/><br/><br/>