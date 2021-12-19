<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>



<?php
	#form submission to the database


	$u1 = $_POST ["p1"];
	$u2 = $_POST ["p2"];
	$u3 = $_POST["p3"];
	$u4 = $_POST["p4"];
	$u5 = $_POST ["p5"];
	$u6 = $_POST ["p6"];


	$sql = "insert into payment(p1,p2,p3,p4,p5,p6)values('$u1','$u2','$u3','$u4','$u5','$u6')";

	 if($conn->query($sql)){
		
		echo "<script type='text/javascript'>alert('Inserted Sucessfully');
		window.location='../html/Home page.html';
		</script>";
    }
    else{
		echo "<script type='text/javascript'>alert('Unable to complete');
		window.location='../php/Account page.php';
		</script>";
    }
	$conn->close();

?>



</body>
</html>