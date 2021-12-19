<?php 
	session_start();
	include_once 'config.php';
?>
<?php
	$username = $_POST ['uname'];
	$pass = $_POST ['psw'];

	$_SESSION['varname'] = $username;



	$get = "SELECT username,password FROM client WHERE password ='$pass';";

	$result = $conn->query($get);


	if ($result->num_rows>0)
	{
		while ( $row = $result->fetch_assoc()) {
			$puser = $row['username'];
			$ppass = $row['password'];

			
			if ($puser==$username && $ppass == $pass ){
				header('Location:../php/Account page.php');
			}

			}
	}
			
	else {
			session_destroy();
			echo "<script type='text/javascript'>alert('Wrong Username or Password');
			window.location='../html/Login.html';
			</script>";
		}

?>