<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>




<?php
	$id = $_POST ["fieldx"];
	$user = $_POST ["field1"];
	$name = $_POST ["field2"];
	$em = $_POST["field3"];
	$ins = $_POST["field4"];

	

	$sql = "UPDATE client SET username = '$user', name = '$name', email= '$em', insurance_type='$ins'  WHERE clientID='$id'";



	if(mysqli_query($conn, $sql)){
			echo "<script type='text/javascript'>alert('Update success');
			window.location='../php/Admin-user manager.php';
			</script>";
	}


	else{
			echo "<script type='text/javascript'>alert('unable to found');
			window.location='../php/Admin-user manager.php';
			</script>";
	}
	

?>



</body>
</html>