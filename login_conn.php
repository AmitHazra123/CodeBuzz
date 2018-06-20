<?php
	if($_POST['username'] && $_POST['pass']){
		$user=$_POST['username'];
		$pass=$_POST['pass'];

		$clients=array(array('user'=>'AMIT','pass'=>'amit123'),array('user'=>'SYED','pass'=>'SYED007'),array('user'=>'SAYAN','pass'=>'sayan969'));

		if($user=='admin@codebuzz.com' && $pass=='admin'){
			session_start();
			$_SESSION['id'] = 1;
			header("location:admin.php");
		}
		else {
			foreach($clients as $client){
				if($cilent['user']==$user && $client['pass'] == $pass){
					session_start();
					$_SESSION['id'] = 1;
					header("location:index.php");
				}
			}
			$message = 1;
			header("location:login.php? msg=$message");
		}
?>


