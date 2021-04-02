
<?php


include_once 'config.php';
if(isset($_POST['submit']))
{  
  $number = $_POST['number'];
  $ename = $_POST['ename'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];	
  $address = $_POST['address'];
  $nic = $_POST['nic'];
  $sql = "INSERT INTO user (u_id,event_name, first_name,last_name,email,phone,address,nic)
  VALUES ($number, '$ename', '$fname','$lname','$email',$phone,'$address','$nic')";
	
  if (mysqli_query($link, $sql)) {
  echo "New record created successfully !";
	  header("Location:regdetails.php");
  } else {
  echo "Error: " . $sql . "
" . mysqli_error($link);
  }
  mysqli_close($link);
}


?>
