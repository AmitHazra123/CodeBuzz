<?php
	session_start();
	if($_POST['sub']){
		$user=$_POST['username'];
		$pass=$_POST['password'];

		$clients=array(array('user'=>'AMIT','pass'=>'amit123'),array('user'=>'SYED','pass'=>'SYED007'),array('user'=>'SAYAN','pass'=>'sayan969'));

		if($user=='admin@codebuzz.com' && $pass=='admin'){
			$_SESSION['id'] = 1;
			header("location:admin.php");
		}
		else {
			foreach($clients as $client){
				if($cilent['user']=='$user' && $client['pass']='$pass'){
					$_SESSION['id'] = 1;
					header("location:index.php");
				}
			}
			$message = "Incorrcect Username or Password";
			header("location:login.php? msg=$message");
		}
	}
?>


