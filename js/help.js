
function loadData(id)
{
    if (id==1)
    {
      var description1 = 	'<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">Oh! Yes of course. There are packages of big discounts and low discounts.</li>'+'<br>'+
 
    '</ul>';
         	document.getElementById("demo").innerHTML = description1;
    }

    else if(id==2)
    {
        var description2 = '<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">Sorry Sir, we can not allow for that however,there is a special package for that.'+'<br>'+
     
    '</ul>';

             document.getElementById("demo").innerHTML = description2;
    }

    else if(id==3)
    {
      var description3 = '<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">Yes Sir, No matter we can give you the insurance.'+'<br>'+
    '</ul>';

      document.getElementById("demo").innerHTML = description3;
    }
	   else if(id==4)
    {
      var description3 = '<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">For that , we have to take legal actions.'+'<br>'+
    '</ul>';

      document.getElementById("demo").innerHTML = description3;
    }
	   else if(id==5)
    {
      var description3 = '<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">After setting all the documents legally .Approeimately within 48 hours.'+'<br>'+
    '</ul>';

      document.getElementById("demo").innerHTML = description3;
    }
	   else 
    {
      var description3 = '<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">It changes according to the situation.'+'<br>'+
    '</ul>';

      document.getElementById("demo").innerHTML = description3;
    }
	
	
		
	}