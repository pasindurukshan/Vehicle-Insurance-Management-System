<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>




<?php
	$del = $_POST["fieldx"];
	$sql = "Delete from client where clientID = $del";

	if($_POST["submit"])
	{
		if(mysqli_query($conn, $sql)){
			echo "<script type='text/javascript'>alert('Delete success');
			window.location='../php/Admin-user manager.php';
			</script>";
		}
	}

	else{
			echo "<script type='text/javascript'>alert('unable to found');
			window.location='../php/Admin-user manager.php';
			</script>";
	}
	
	$conn->close();
?>



</body>
</html>