<?php
	session_start();
	$user=$_POST['username'];
	$pass=$_POST['pass'];

	echo $user;
	echo $pass;
	/*$clients=array(array('user'=>'AMIT','pass'=>'amit123'),array('user'=>'SYED','pass'=>'SYED007'),array('user'=>'SAYAN','pass'=>'sayan969'));

	if($user=='admin@codebuzz.com' && $pass=='admin'){
		$_SESSION['id'] = 1;
		header("location:admin.php");
	}
	else {
		foreach($clients as $client){
			if($cilent['user']==$user && $client['pass']=$pass){
				$_SESSION['id'] = 1;
				header("location:index.php");
			}
		}
		$message = 1;
		header("location:login.php? msg=$message");
	}*/
?>


