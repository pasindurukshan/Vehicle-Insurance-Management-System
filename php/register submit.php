<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>


<?php
	#form submission to the database


	$namef = $_POST ["field1"];
	$namel = $_POST ["field2"];
	$username = $_POST["usrnm"];
	$email = $_POST["email"];
	$contactno = $_POST ["phone"];
	$passwordno = $_POST ["psw"];
	$bran = $_POST ["make"];
	$model = $_POST ["model"];
	$year = $_POST["date"];
	$ins = $_POST["insurance"];
	$value = $_POST ["cash"];




	$sql = "insert into client(fname,lname,username,email,contact,password,brand,model,manf_year,insurance_type,value)values('$namef','$namel','$username','$email','$contactno','$passwordno','$bran','$model','$year','$ins','$value')";

	 if($conn->query($sql)){
			echo "<script type='text/javascript'>alert('Update success');
			window.location='../html/Home page.html';
			</script>";
    }
    else{
        echo "Error.".$conn->error;
		echo "<script type='text/javascript'>alert('Update Failed');
			window.location='../html/Home page.html';
			</script>";
    }
	$conn->close();

?>



</body>
</html>