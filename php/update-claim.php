<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>




<?php
	$id = $_POST ["fieldx"];
	$user = $_POST ["field1"];
	$date = $_POST ["field2"];
	$vehic = $_POST["field3"];
	$ins = $_POST["field4"];

	

	$sql = "UPDATE claim SET username = '$user', date = '$date', vehicle_type= '$vehic', insurance_type='$ins'  WHERE claimID='$id'";



	if(mysqli_query($conn, $sql)){
			echo "<script>alert ('Update succesfull')</script>";
	}


	else{
			echo "<script type='text/javascript'>alert('Not found');
			window.location='../php/Admin-claim manager.php';
			</script>";
	}
	

?>



</body>
</html>