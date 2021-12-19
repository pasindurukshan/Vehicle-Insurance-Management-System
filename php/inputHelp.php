<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>



<?php
	#form submission to the database


	$u1 = $_POST ["f1"];
	$u2 = $_POST ["f2"];
	$u3 = $_POST["f3"];
	$u4 = $_POST["f4"];

	$sql = "insert into help(h1,h2,h3,h4)values('$u1','$u2','$u3','$u4')";

	 if($conn->query($sql)){
		
		echo "<script type='text/javascript'>alert('Inserted Sucessfully');
		window.location='../html/Home page.html';
		</script>";
    }
    else{
		echo "<script type='text/javascript'>alert('Unable to complete');
		window.location='../html/help.html';
		</script>";
    }
	$conn->close();

?>



</body>
</html>