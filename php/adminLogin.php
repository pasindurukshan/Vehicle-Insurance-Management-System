<?php 
	session_start();
	include_once 'config.php';
?>

<?php
	$username = $_POST ['aduname'];
	$pass = $_POST ['adpsw'];

	$get = "SELECT adminUsername,adminPassword FROM admin WHERE adminPassword ='$pass';";

	$result = $conn->query($get);

	echo mysqli_num_rows($result);


	if ($result->num_rows>0)
	{
		while ( $row = $result->fetch_assoc()) {
			$puser = $row['adminUsername'];
			$ppass = $row['adminPassword'];

			
			if ($puser==$username && $ppass == $pass ){
				header('Location:../php/Admin-claim manager.php');
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