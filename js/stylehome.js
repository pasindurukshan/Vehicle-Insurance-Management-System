var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
} 


function loadData(id)
{
    if (id==1)
    {
      var description1 = 	'<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">Policyholder should have an insurable interest on the vehicle</li>'+'<br>'+
      '<li style="list-style-type:disc;">The policy can be obtained by adults over 18 years of age</li>'+'<br>'+
      '<li style="list-style-type:disc;">Policyholder should be eligible to sign an insurance agreement as per the legislation framework of Sri Lanka</li>'+'<br>' +
      '<li style="list-style-type:disc;">Insuring vehicle/s should be within the geographical limits of Sri Lanka</li>'+'<br>'+
    '</ul>';
         	document.getElementById("demo").innerHTML = description1;
    }

    else if(id==2)
    {
        var description2 = '<h3 style="margin-left:20px; color: black;">' + 'Free benefits under comprehensive cover' + '</h3>' +
        '<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc;">Learner cover</li>'+'<br>'+
      '<li style="list-style-type:disc;">Free flood cover including natural disaster</li>'+'<br>'+
      '<li style="list-style-type:disc;">Hire purchase or leasing – no loading on premium</li>'+'<br>' +
      '<li style="list-style-type:disc;">Taxi fee – for private cars subject to a maximum of 15 days in excess of the first three days</li>'+'<br>'+
      '<li style="list-style-type:disc;">No Claim Bonus – In the event of no claims made during the period of Insurance, a discount on the basic premium of up to 70% is allowed</li>'+'<br>'+
      '<li style="list-style-type:disc;">On- the- spot assessments island wide</li>'+'<br>'+
      '<li style="list-style-type:disc;">Direct settlement to the repairer (optional)</li>'+'<br>'+
    '</ul>';

             document.getElementById("demo").innerHTML = description2;
    }

    else
    {
      var description3 = '<h2  style="margin-left:20px;">' + 'Here’s how you can get claiming!' + '</h2>' 
      + '<p  style="margin-left:20px;">' + 'We believe that making a claim should be as easy as ordering a pizza! That’s why we’ve made it our mission to make this as simple as humanly possible for you' + '</p>' + '<br>'
      + 	'<ul style="color: black; margin-left:20px;">'+
      '<li style="list-style-type:disc">If you meet with an accident, give us a call on 011 2428428 to report the accident</li>'+'<br>'+
      '<li style="list-style-type:disc">You may choose to do the inspection yourself by taking a few pictures and sending them across to us OR you can ask for an assessor to be sent to wherever you are.</li>'+'<br>'+
      '<li style="list-style-type:disc">Our team of field agents OR assessor on site will assess the damages and give you an estimate for the cost of repairs.</li>'+'<br>'
      '<li style="list-style-type:disc">You can agree to the amount offered and collect the cash within a matter of minutes OR insist to go in for a garage repair whereby we will sort out everything with the respective garage.</li>'+'<br>'+
    '</ul>';

      document.getElementById("demo").innerHTML = description3;
    }
		
	}