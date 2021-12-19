<!DOCTYPE html>
<html>
<body>

<?php

	include_once 'config.php';
?>


<?php

//uploading picture evidence

	$target_dir = "../uploads/pictures/";
	$target_file = $target_dir . basename($_FILES["filename1"]["name"]);
	
	if(isset($_FILES["filename1"])) {
	
		if (move_uploaded_file($_FILES["filename1"]["tmp_name"],$target_file)){
  		echo "The file ". basename( $_FILES["filename1"]["name"]). " is uploaded.";
	} 
	else
	 {
 		echo "Error while uploading your file."; 
	}
	}else{
	echo "File not available"; 
	}


//uplpoad video evidence


	$target_dir2 = "../uploads/video/";
	$target_file2 = $target_dir2 . basename($_FILES["filename2"]["name"]);
	
	if(isset($_FILES["filename1"])) {
	
		if (move_uploaded_file($_FILES["filename2"]["tmp_name"],$target_file2)){
  		echo "The file ". basename( $_FILES["filename2"]["name"]). " is uploaded.";
	} 
	else
	 {
 		echo "Error while uploading your file."; 
	}
	}else{
	echo "File not available"; 
	}

		echo "<script type='text/javascript'>alert('Reloaing');
			window.location='../html/Home page.html';
			</script>";


?>






<?php
	#form submission to the database


	$user = $_POST ["field1"];
	$date = $_POST ["field2"];
	$vehic = $_POST["field3"];
	$ins = $_POST["field4"];

	$sql = "insert into claim(username,date,vehicle_type,insurance_type,evidence_location,video_path)values('$user','$date','$vehic','$ins','$target_file','$target_file2 ')";

	 if($conn->query($sql)){
		
		echo "<script type='text/javascript'>alert('Sucessfull submission');
		window.location='../html/Home page.html';
		</script>";
    }
    else{
		echo "<script type='text/javascript'>alert('unable to complete');
		window.location='../html/Request claim.html';
		</script>";
    }
	$conn->close();

?>



</body>
</html>