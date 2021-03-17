<?php
require 'connect.php';

error_reporting(E_ERROR);

$user = [];

$sql = "SELECT * FROM user";

if($result = mysqli_query($con, $sql))
{
	$cr = 0;

	while($row = mysqli_fetch_assoc($result))
	{
		$user[$cr]['sId'] = $row['id'];
		$user[$cr]['name'] = $row['name'];
		$user[$cr]['username'] = $row['username'];
		$user[$cr]['email'] = $row['email'];
		$cr++;
	}
	echo json_encode($user);	
}
else
{
	http_response_code(404);
}

?>