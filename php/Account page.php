<?php 
	session_start();
	include_once 'config.php';
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Power Assurance </title>
	<meta name="viewpoint" content="width=device-width, initial-scale=1.0">

<!--This is a hyperlink is for get social media icons which mention in w3school; Reference: https://www.w3schools.com/howto/howto_css_social_media_buttons.asp -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type ="text/css" href="../css/header-footer.css">
	<link rel="stylesheet" type ="text/css" href="../css/accountstyles.css">

</head>

<body>
	<div style="bodybg">	
	<nav>
		
		<img src="../images/logo3.png" alt="login" width="220px" height="80px" > 
	<ul>
		<li class="menu1"><a href="../html/Home page.html">HOME</a></li>
        <li class="menu2"><a href="../html/Insurance.html"> INSURANCE </a></li>
        <li class="menu1"><a href="../html/Request claim.html"> CLAIM</a></li>
        <li class="menu2"><a href="../html/Register_Page.html"> REGISTER </a></li>
        <li class="menu3"><a href="../html/Help.html"> HELP </a></li>
        <li class="menu2"><a href="../html/AboutUs.html"> CONTACT US </a></li>	
		<li><a href="../html/Login.html"><img id="login" src="../images/icon.png" alt="login" width="50px" height="50px" style="float:inline-end;"></a></li>
		  
	</ul>
	</nav>

	</br></br></br></br></br>
	
	<div class="container">
		<div class="leftpane">
			<p>

				<center><img src="../images/Avatar.png" alt="aacount" width="60px" height="60px" style="margin-top: 5px;"></center>
	<?php


		$user = $_SESSION['varname'];
		$display = "SELECT * from client WHERE username='$user' ";
		$result = $conn->query($display);

		if ($result->num_rows>0)
		{
			while ( $row = $result->fetch_assoc()) {

			echo "UserID:".$row["clientID"]."</br>Name:".$row["fname"].$row["lname"]."</br>Username: ".$row["username"]."</br>Email:".$row["email"]."</br>Contact".$row["contact"];
			
			}

		}

	else{
		echo "<script>alert ('No result found')</script>";
	}
	$conn->close();

	?>




		</div>

		<div class="rightpane">
			

			<br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<center><button onclick="document.getElementById('id01').style.display='block'" style="width:600px; border-radius: 10px; background-color: orange;"> <b>Pay Now </b></button></center>

	<div id="id01" class="modal">
	<div class="row">
		<div class="col-75">
			<form class="modal-content animate" style="border-radius: 5px; padding: 20px;" action="../php/pay.php">
	  
			  <div class="row">

	  
				<div class="col-50">
				  <h3>Payment</h3>
				  <label for="fname">Accepted Cards</label>
				  <div class="icon-container">
					<i class="fa fa-cc-visa" style="color:navy;"></i>
					<i class="fa fa-cc-amex" style="color:blue;"></i>
					<i class="fa fa-cc-mastercard" style="color:red;"></i>
					<i class="fa fa-cc-discover" style="color:orange;"></i>
				  </div>
				  <label for="cname">Name on Card</label>
				  <input type="text" id="cname" name="p1" placeholder="John More Doe">
				  <label for="ccnum">Credit card number</label>
				  <input type="text" id="ccnum" name="p2" placeholder="1111-2222-3333-4444">
				  <label for="expmonth">Exp Month</label>
				  <input type="text" id="expmonth" name="p3" placeholder="September">
				  <label for="expmonth">Ammount</label>
				  <input type="text" id="Ammount" name="p4" placeholder="10000">
	  
				  <div class="row">
					<div class="col-50">
					  <label for="expyear">Exp Year</label>
					  <input type="text" id="expyear" name="p5" placeholder="2018">
					</div>
					<div class="col-50">
					  <label for="cvv">CVV</label>
					  <input type="text" id="cvv" name="p6" placeholder="352">
					</div>
				  </div>
				</div>
	  
			  </div>
			  <label>
				<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
			  </label>
			  <input type="submit" value="Continue to checkout" class="btn">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			</form>
		
		</div>
	  
	  </div> 
	  </div>

	  <script>
		// Get the modal
		var modal = document.getElementById('id01');
		
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>
	

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

