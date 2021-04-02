<?php

require_once('config.php');

$sql_user=("Select * FROM user ORDER BY u_id");
$result_user=mysqli_query($link,$sql_user);


$sql_user_rec=("Select * FROM user ORDER BY u_id");
$result_sql_user_rec=mysqli_query($link,$sql_user_rec);

if(isset($_POST['sub'])){ 

$searched_text=$_POST['search']; 
$sql_user_rec=("SELECT * FROM user WHERE first_name like '%$searched_text%' or last_name like '%$searched_text%'");
	
$result_sql_user_rec=mysqli_query($link,$sql_user_rec);
}


$nor=mysqli_num_rows($result_sql_user_rec);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head> 
	
<body style="background-color:#cccccc" >  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
	
   <div align ="center">
  
   <h1 style= "color : midnightblue">User Details</h1>
	   <p><h4 class="left"> <form action="regdetails.php" method="post" /><span><input type="text" name="search" id="search" /></span> &nbsp;<input type="submit"  value="Search" name="sub" /></h4></p> 
	   
	<p>&nbsp;</p> 
            <?php if($nor!=0){ ?> 
		<table width="100%" border="1">
			
    <tr>
	    <th style="color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>UserID</b></i></th> 
      <th style="color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>EventName</b></i></th>       
      <th style="color:color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>FirstName</b></i></th>
      <th style="color:color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>LastName</b></i></th>
      <th style="color:color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>Email</b></i></th>
      <th style="color:color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>Phone</b></i></th>
      <th style="color:color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>Address</b></i></th>      
      <th style="color:color: #000 !important;
  background:-webkit-linear-gradient(top,#64B5F6 25%,#42A5F5 75%)"><i><b>NIC</b></i></th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
	  <th>&nbsp;</th>
    </tr>
			<?php while($row_user=mysqli_fetch_array($result_user))
      { ?>
			
    <tr>
      <td><?php echo $row_user['u_id']; ?></td> 
      <td><?php echo $row_user['event_name']; ?></td> 
      <td><?php echo $row_user['first_name']; ?></td>
      <td><?php echo $row_user['last_name']; ?></td>
      <td><?php echo $row_user['email']; ?></td>
      <td><?php echo $row_user['phone']; ?></td>
      <td><?php echo $row_user['address']; ?></td>
	    <td><?php echo $row_user['nic']; ?></td>
      <td><a href="regdetails.php?id=<?php echo $row_user['u_id']; ?>" ><img src="images/search.png" width="15" height="15" alt="view"/>View</a></td>
      <td><a href="editreg.php?id=<?php echo $row_user['u_id']; ?>"><img src="images/pencil.png" width="15" height="15" alt="Edit" />Edit</a</td>
      <td><a href="delete.php?id=<?php echo $row_user['u_id']; ?>"><img src="images/delete.png" width="15" height="15" alt="Delete"/>Delete</a></td>
    </tr>
			<?php } ?>
	  
	  
			
</table>
			<?php }else{ 
      
   echo "<p align='center' style='color:#F00'> <br /><br />No records<br /><br /></p>";   
    }?>  
        <br />
			</form>
			</div>
	</body>
</html>