<?php
session_start();
$_SESSION['id'] = 1;
$user=$_POST['username'];
$pass=$_POST['password'];

$clients=array(array('user'=>'AMIT','pass'=>'amit123'),array('user'=>'SYED','pass'=>'SYED007'),array('user'=>'SAYAN','pass'=>'sayan969'));

if($user=='admin@codebuzz.com' && $pass=='admin')
	header("location:admin.php");
else 
{
	foreach($clients as $client)
	{
		if($cilent['user']=='$user' && $client['pass']='$pass')
		{
			S_SESSION['user']=$user;
			S_SESSION['pass']=$pass;
			header("location:index.php");
		}
	}
	header("Location:index.php");
}
?>


