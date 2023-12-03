<?php 

	include 'database.php';

	session_start();

	$username = $_POST['username'];
	$senha = $_POST['senha'];
	$check=mysqli_query($conn,"select * from facilitadores where username='$username' and senha='$senha';");
	$contaServicos = mysqli_num_rows($check);  

	if ($contaServicos == 1) {
		
      echo "<script>";
      echo "sessionStorage.setItem('username_adm', $username);";
      echo "window.location.href = './controle/index.php';";
      echo "</script>";

	}else{
      echo "
			<script>
				alert('O email ou senha errada. Por favor, tente novamente!'); 
	  			window.history.back();
			</script>";
      exit;
	}
	
?>