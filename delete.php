<?php 
 
require_once('config.php');
 
echo $u_id=$_REQUEST['id'];
 
$sqluser_delete="DELETE FROM user WHERE u_id='$u_id'";

$result_del = mysqli_query($link, $sqluser_delete);

header("Location:regdetails.php");
echo "Record has been deleted successfully !";


?>