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
    $sqlup = "UPDATE user SET event_name=$ename, first_name = $fname, last_name = $lname, email = $email, phone = $phone, address = $address, nic = $nic
    WHERE u_id = $name";
    
    if (mysqli_query($link, $sqlup)) {
        echo "Record has been updated successfully !";
            header("Location:regdetails.php");
        } else {
        echo "Error: " . $sqlup . "
      " . mysqli_error($link);
        }
        mysqli_close($link);
 }

?>