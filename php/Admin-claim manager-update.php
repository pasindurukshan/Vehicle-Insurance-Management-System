<?php 
	include_once 'config.php';
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel </title>

<!--This is a hyperlink is for get social media icons which mention in w3school; Reference: https://www.w3schools.com/howto/howto_css_social_media_buttons.asp -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type ="text/css" href="../css/header-footer.css">
	<link rel="stylesheet" type ="text/css" href="../css/admin.css">
	<script src="../js/admin-agent manager.js"></script>
</head>

<body onload="document.getElementById('id01').style.display='block'" style="width:auto;">
	<nav>
		
		<img src="../images/logo3.png" alt="login" width="220px" height="80px" > 
	<ul>
		<li class="menu1"><a href="../html/Home page.html">HOME</a></li>
        <li class="menu2"><a href="../html/Insurance.html"> INSURANCE </a></li>
        <li class="menu1"><a href="../html/Request claim.html"> CLAIM</a></li>
        <li class="menu2"><a href="../html/Register_Page.html"> REGISTER </a></li>
        <li class="menu3"><a href="../html/Help.html"> HELP </a></li>
        <li class="menu2"><a href="../html/AboutUs.html"> CONTACT US </a></li>	
		<li><a href="Login.html"><img id="login" src="../images/icon.png" alt="login" width="50px" height="50px" style="float:inline-end;"></a></li>
		  
	</ul>
	</nav>
	
<!--End of header--->
</br></br></br></br></br>

<div class="head">
	<h1 style="font-family: verdana;" >ADMIN DASHBOARD</h1> </br>
	<h2 style="text-align: center; font-family: verdana;">Claim Manager</h1>

	<button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
</div>

<!--side bar-->


<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="Admin-claim manager.php">Add new </a>
  <a href="Admin-claim manager-delete.php">Delete </a>
  <a onload="document.getElementById('id01').style.display='block'">Update</a>
  <a href="#">Log out</a> 
 </br>

 <div class="dropdown">
 	 <a href="#" class="dropbtn" >Admin console</a>
  <div class="dropdown-content">
    <a href="Admin-user manager.php">User manager</a>
    <a href="Admin-claim manager.php">Claim manager</a>
    <a href="Admin-agent manager.php">Agent manager</a>
  </div>
</div>

 
</div>

<div class="sidebarx">	</div>

<div class="display">
	<fieldset>
	
	<table class="table-decoration">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Date</th>
		<th>Vehicle</th>
		<th>Insurance type</th>
		<th>Pictorial Evidence</th>
		<th>Video Evidence</th>		
	</tr>

	<?php
	
		$display = "select * from claim";
		$result = $conn->query($display);

		if ($result->num_rows>0)
		{
			while ( $row = $result->fetch_assoc()) {

			echo "<tr><td>".$row["claimID"]."</td><td>".$row["username"]."</td><td>".$row["date"]."</td><td>".$row["vehicle_type"]."</td><td>".$row["insurance_type"]."</td><td>".$row["evidence_location"]."</td><td>".$row["video_path"]."</td></tr>";
			
			}

		}

	else{
			echo "<script type='text/javascript'>alert('Not found');
			window.location='../php/Admin-claim manager.php';
			</script>";
	}
	$conn->close();

	?>



	</table>

	</fieldset>
	
</div>






<!--hidden form-->

<!--add new-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="update-claim.php">
    <div class="container">


    <label for="value1" style="font-family: verdana;"><b>Claim ID: &nbsp; </b></label>
	<input class="input-border" name="fieldx" type="text" placeholder=" " id="value1"/>
 
	<label for="value1" style="font-family: verdana;"><b>USERNAME: &nbsp; </b></label>
	<input class="input-border" name="field1" type="text" placeholder="Username" id="value1"/>
	</br></br>



	<label for="value2" style="font-family: verdana;"><b>Date: &nbsp;</b></label>
	<input class="input-border" name="field2" type="Date" placeholder="Date" id="value2"/>
	</br></br>


	<h3>Vehicle Type:</h3> </br>
		<input type="radio" name="field3" id="car" name="vehicle" value="Car"/>
		<label for="Car">Car &nbsp;</label>
				
		<input type="radio" name="field3" id="van" name="vehicle" value="Van"/>
		<label for="Van">Van  &nbsp;</label>
				
		<input type="radio" name="field3" id="bus" name="vehicle" value="Bus"/>
		<label for="bus">Bus  &nbsp;</label>

		<input type="radio" name="field3" id="Truck" name="vehicle" value="Truck"/>
		<label for="bus">Truck  &nbsp;</label>
				
		<input type="radio" name="field3" id="bike" name="vehicle" value="Bike"/>
		<label for="bike">Bike  &nbsp;</label>
				
		<input type="radio" name="field3" id="threewheel" name="vehicle" value="Threewheel"/>
		<label for="threewheel">Three Wheel</label></br></br></br>


		<h3>Insurance Type:</h3></br>
		<input type="radio" id="thirdparty" name="field4" value="Third Party"/>
		<label for="Car">Third party Insurance</label> </br> </br>
			
		<input type="radio" id="totalloss" name="field4" value="Total Loss"/>
		<label for="Van">Total loss Insurance </label> </br></br>
				
		<input type="radio" id="Comprehensive" name="field4" value="Comprehensive"/>
		<label for="bus">Comprehensive Insurance </label> </br></br>

  	<center>
		 <input class="sub-btn" type="submit"  name="submit" id="submit_button"/>
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
  	  	<center>
      	<a href="Admin-claim manager.php"><button type="button" class="cancelbtn">Cancel</button></a>
      </center>
    </div>

  	</form>
</div>



<!--footer-->

<footer>


	<a href="../html/AboutUs.html" style="font-size: 22px; color: black;" class="footer-blocks"><p class="tabs">ABOUT US</p></a>
	<a href="../html/Feedback.html" style="font-size: 22px; color: black;" class="footer-blocks"><p class="tabs">FEEDBACK</p></a>

	<div class="footer-blocks">
		<p id="follow" style="color: black; font-size: 22px;"><b> Follow Us </p>
		<ul>
			<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://lk.linkedin.com/" class="fa fa-linkedin"></a></li>
		</ul>
	</div>

	<div class = "footer-blocks">
		
		<p style="color: black; font-size: 22px;" for="img1">POWER ASSURANCE PVT.LTD </p>
		<!--img src="../images/foot.png" width="30px" height="40px" id="img1"--> </br> 
		
		<p style="color: black;">Created by Power Assurance</p>
	</div>



<div class="footerbg">

</br></br></br></br></br></br></br></br></br>

	<center> <p style=" color: #f2f2f2; text-shadow: none;">©Copyright POWER ASSURANCE 2020. All Rights Reserved</p> </center>
	
</br></br></br></br></br></br></br></br></br></br>
</div></footer> 
</body>
</html>

