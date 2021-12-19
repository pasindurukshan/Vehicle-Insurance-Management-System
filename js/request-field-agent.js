//get location from the user to notify the field agent

function getLocation() {
  var x = document.getElementById("demo");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
	
	function showPosition(position) {
		x.innerHTML = "Latitude: " + position.coords.latitude + 
			"</br>Longitude: " + position.coords.longitude;
	}
} 
  else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function enableButton()
{
	var chkbox = document.getElementById("agreementChkbox");
	var sub = document.getElementById("submit_button");
	
	if(chkbox.checked == true)
	{
		sub.disabled = false;
	}
	else
	{
		sub.disabled = true;
	}
}	

function success()
{
	alert("success!");
}

