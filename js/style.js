
function checkpasswords(){
    if(document.getElementById("psw").value != document.getElementById("rpsw").value)
    {
        alert("passwords are not mathing");
        return false;
    }
    else
    {
        return true;
    }
}


function enablebutton()
{
    if(document.getElementById("policy").checked)
    {
        document.getElementById("btn").disabled=false;
    }
    else
    {
        document.getElementById("btn").disabled=true; 
    }
}



function myFunction()
	{
	  alert("Register Page is loaded");
	}