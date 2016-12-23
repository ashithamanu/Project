<?php
$conn = mysqli_connect('localhost','root','','project_db');

if(isset($_REQUEST['email']) && isset($_REQUEST['password']))
{
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$query="select * from user_details where vchr_email='$email' and vchr_password='$password'";
	$result=mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==1)
	{
	// $msg = array("ResponseCode"=>"200","msg"=>"Success");
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$msg[] = $row;
		$msg[0]["ResponseCode"]="200";
		$msg[0]["msg"]="success";
	}
	else
	{
		$query="select * from user_details where vchr_email='$email'";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1)
		{
			$msg=array("ResponseCode"=>"500","msg"=>"password incorrect");
		}
		else
		{
			$msg=array("ResponseCode"=>"404","msg"=>"Emailid or Password is not defined");
		}
	}	
}
else
{
	$msg=array("ResponseCode"=>"404","msg"=>"no data received");	
}
	echo json_encode($msg);
// print_r($msg);
?>