<?php

include("config.php");

?>
<!DOCTYPE html>
<html>
   <head>
   <title>sign up</title>
   <script type="text/javascript">
   function check(){
  if(document.reg.number.value==""){
        alert("Blank user id");
        document.reg.number.focus();
        return false;
  }else if(document.reg.ename.value==""){
				alert("Blank Event Name");
				document.reg.ename.focus();
				return false;
  }else if(document.reg.fname.value==""){
				alert("Blank First Name");
				document.reg.fname.focus();
				return false;
	}else if(document.reg.lname.value==""){
				alert("Blank Last Eame");
				document.reg.lname.focus();
				return false;
	}else if(document.reg.email.value==""){
				alert("Blank email");
				document.reg.email.focus();
				return false;
	}else if(document.reg.phone.value==""){
				alert("Blank Phone");
				document.reg.phone.focus();
				return false;
	}else if(document.reg.address.value==""){
				alert("Blank Address");
				document.reg.address.focus();
				return false;
        }else if(document.reg.nic.value==""){
				alert("Blank Nic");
				document.reg.nic.focus();
				return false;
        }
	return true;
}
</script>
   </head>
   <body style="background-color:#cccccc">
    <div align="center"> <h1 style="color : green">Event Registration</h1>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
	<br>
	<form role="form" method="post" name="reg" id="reg" method="post" action="regprocess.php" onsubmit="return check()">
    <div class="form-group row">
    <label for inputuserid><i><b>UserID</b></i></label>
    <div class="col-sm-10">
    <input type="number" name="number" id="number" placeholder="ID number"> 
      </div>
    </div>
    <br>
    
    <div class="form-group row">
        <label for="inputeventname" class="col-sm-2 col-form-label"><i><b>EventName</b></i></label>
        <div class="col-sm-10">
         <select name="ename" id="ename">
                  <option value="">Event Option</option>
                  <option value="Cultural Events">Cultural Events</option>
                  <option value="Social Events">Social Events</option>
                  <option value="Seminar">Seminar</option>
                  <option value="Workshop">Workshop</option>
                  <option value="Award ceremony">Award Ceremony</option>
         </select>
         </div>
</div>
  <br> <br> 
    <div class="form-group row">
    <label for inputfirstname><i><b>FirstName</b></i></label>
    <input type="fname" name="fname" id="fname" placeholder="Firstname">
    <label for inputlastname><i><b>LastName</b></i></label>
    <input type="lname" name="lname" id="name" placeholder="Lastname">
    <div class="form-group row">
       </div>
    </div>
    <br>
    <div class="form-group row">
    <label for inputemail><i><b>Email</b></i></label>
    <div class="col-sm-10">
    <input type="email" name="email" id="email" placeholder="user@example.com">
       </div>
    </div>
    <br>
    <div class="form-group row">
    <label for inputphone><i><b>Phone</b></i></label>
    <div class="col-sm-10">
    <input type="phone" name="phone" id="phone" placeholder="Contact number">
        </div>
    </div>
    <br>
    <div class="form-group row">
    <label for inputaddress><i><b>Address</b></i></label>
    <div class="col-sm-10">
    <input type="address" name="address" id="address" placeholder="Adress">
        </div>
    </div>
    <br>
    <div class="form-group row">
    <label for inputnic><i><b>NIC</b></i></label>
    <div class="col-sm-10">
    <input type="nic" name="nic" id="nic" placeholder="nic number">
        </div>
    </div>
    <br>
    <div class="form-group row">
   <div class="col-sm-10">
    <input style ="background-color: orange" type="submit" value="Register" name="submit" id="submit">
    <input style ="background-color: pink" type="submit" value="Cancel" name="submit" id="submit">
      </div>
    </div>
    </form>
</div>  

   </body>
</html>