<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>




<?php
	$del = $_POST["fieldx"];
	$sql = "Delete from claim where claimID = $del";

	if($_POST["submit"])
	{
		if(mysqli_query($conn, $sql)){
			echo "<script type='text/javascript'>alert('Update success');
			window.location='../php/Admin-claim manager.php';
			</script>";
		}
	}

	else{
			echo "<script type='text/javascript'>alert('Update error');
			window.location='../php/Admin-claim manager.php';
			</script>";
	}
	
	$conn->close();
?>



</body>
</html>