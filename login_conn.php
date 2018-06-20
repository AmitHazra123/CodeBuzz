<?php
	if($_POST['username'] && $_POST['pass']){
		$user = $_POST['username'];
		$password =$_POST['pass'];

		$clients=array(array('user'=>'AMIT','pass'=>'amit123'),array('user'=>'SYED','pass'=>'SYED007'),array('user'=>'SAYAN','pass'=>'sayan969'));

		if($user=='admin@codebuzz.com' && $password =='admin'){
			session_start();
			$_SESSION['id'] = 1;
			header("location:admin.php");
		}
		else {
			foreach($clients as $client){
				echo $client['user'];
				echo $client['pass'];
				if($cilent['user'] == $user && $client['pass'] == $password){
					/*session_start();
					$_SESSION['id'] = 1;
					header("location:index.php");*/
				}
			}
			$message = 1;
			header("location:login.php? msg=$message");
		}
	}
?>


