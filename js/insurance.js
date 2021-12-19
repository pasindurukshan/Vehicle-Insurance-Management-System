
//slideshow by on click 
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length)
  {
	  slideIndex = 1
  }    
  if (n < 1) 
  {
	  slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) 
	  {
		slides[i].style.display = "none";  
	  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//automatic slide show 
var slideIndex = 0;
showSlides();

function showSlides() 
{
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) 
  {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) 
  {
	  slideIndex = 1
  }    
  for (i = 0; i < dots.length; i++)
	{
		dots[i].className = dots[i].className.replace(" active", "");
	}
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

//hide qoutation your vehicle html
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}




//calculate the estimate quotation
function getInputValue(){
		
        var inputVal = document.getElementById("myInput").value;
		
		var valueTP = inputVal * 0.3;
		var valueTL = inputVal * 0.4;
		var valueC = inputVal * 0.5;
		
           
        alert('Estimated value of insurance coverage \nThird party coverage: Rs.' + valueTP + '\nTotal Loss coverage: Rs.' + valueTL + '\nComprehensive coverage: Rs.' + valueC );
}




//description about insurance policy
function loadData(data)
{
	if (data==0)
	{	document.getElementById("myImg").src = "../images/million.jpg";	
		var description1 = '<center>'+'<h1 style="color:blue ">Third Party Insurance</h1>'+'</center>'+'<ul>'+
    '<li>Loss or damage to your vehicle caused by fire, external explosion, self-ignition or lightning</li>'+
    '<li>Loss of your vehicle due to theft or damage after theft and repair by reputable repair center </li>'+
    '<li>Liability for damage to third party vehicle and any other damage caused by your vehicle</li>'+
	'</ul>'+
'<br>'+'<br>'+'<br>'+'<center>'+
	'<h2>'+'<b>Other Benifits</b>'+'</h2>'+'</center>'+
    '<ul style="list-style-type:circle">'+
	'<li>You are assured of the best deals on your motor Insurance</li>'+
    '<li>Fast and flexible claims settlement discounts on back- to- back accident free years</li>'+
    '<li>Towing facility in the event of an accident</li>'+
    '<li>24×7 customer assistance for all claim intimations</li>'+
	'<li>Liability for damage to third parties caused by your vehicle.</li>'+
	'</ul>';
         	document.getElementById("demo").innerHTML = description1;
		
		
	}
	else if (data==1)
	{
		document.getElementById("myImg").src = "../images/offer.jpg";
		
		var description2 = '<center>'+'<h1 style="color:green ">Total Loss</h1>'+'</center>'+'<ul>'+
    '<li>Total Loss of vehicle due to Theft, Accident, Fire, External Explosion, Self-Ignition, Lightning or Natural Disaster </li>'+
    '<li>Third party Death or Bodily injury,Unlimited liability for damage to third party vehicle damage caused by your vehicle </li>'+
    '<li>Third party property damage up to a maximum of LKR 5 Million and damage inspection of the property for free of charge</li>'+
	'</ul>'+
'<br>'+'<br>'+'<br>'+ '<center>'+
	'<h2>'+'<b>Other Benifits</b>'+'</h2>'+ '</center>'+
    '<ul style="list-style-type:circle">'+
	'<li>You are assured of the best deals on your motor Insurance</li>'+
    '<li>Fast and flexible claims settlement discounts on back- to- back accident free years</li>'+
    '<li>Towing facility in the event of an accident</li>'+
    '<li>24×7 customer assistance for all claim intimations</li>'+
	'<li>Liability for damage to third parties caused by your vehicle.</li>'+
	'</ul>';
         	document.getElementById("demo").innerHTML = description2;
	}
	else if (data==2)
	{
		document.getElementById("myImg").src = "../images/promo2.jpg";
		
		var description3 ='<center>'+ '<h1 style="color:#cc0066 ">Comprehensive Insurance</h1>'+'</center>'+'<ul>'+
    '<li>Accidental loss or damage to your vehicle, accessories and spare parts and Legal Liability cover for passengers </li>'+
    '<li>Third party Death or Bodily injury,Unlimited liability for damage to third party vehicle damage caused by your vehicle </li>'+
    '<li>Third party property damage up to a maximum of LKR 20 Million and damage inspection of the property for free of charge </li>'+
	'</ul>'+
'<br>'+'<br>'+'<br>'+'<center>'+
	'<h2>'+'<b>Other Benifits</b>'+'</h2>'+'</center>'+
    '<ul style="list-style-type:circle">'+
	'<li>You are assured of the best deals on your motor Insurance</li>'+
    '<li>Fast and flexible claims settlement discounts on back- to- back accident free years</li>'+
    '<li>Towing facility in the event of an accident</li>'+
    '<li>24×7 customer assistance for all claim intimations</li>'+
	'<li>Liability for damage to third parties caused by your vehicle.</li>'+
	'</ul>'+
'<br>'+'<br>'+'<br>'+'<center>'+
	'<h2>'+'<b>Additional options available under comprehensive insurance</b>'+'</h2>'+'</center>'+
    '<ul style="color:#e60000">'+
	'<li>Personal accident benefits</li>'+
    '<li>Workmen/’s compensation for pasangers</li>'+
    '<li>Windscreen and window damages for free</li>'+
    '<li>Legal Liability cover for passengers</li>'+
	'<li>Strike, riot and civil commotion.</li>'+
	'</ul>';
         document.getElementById("demo").innerHTML = description3;		
	}	
	
	else if (data==3)
	{
		document.getElementById("myImg").src = "../images/promo1.jpg";
		 document.getElementById("demo").innerHTML = " ";	

	}
		else if (data==4)
	{
		document.getElementById("myImg").src = " ";
		 document.getElementById("demo").innerHTML = " ";	

	}	
}