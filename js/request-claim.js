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
