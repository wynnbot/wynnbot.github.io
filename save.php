<?php
	include 'database.php';

	session_start();
	
	if($_POST['type']==2){
		$username=$_POST['username'];
		$senha=$_POST['senha'];
		$check=mysqli_query($conn,"select * from facilitadores where email='$username' and senha='$senha'");
		
		if (mysqli_num_rows($check) > 0) {
		  $_SESSION['username_adm'] = $username;
		  echo json_encode(array("statusCode" => 200));
		}

		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>