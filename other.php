<?php
include_once 'header.php';
?>	

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body style="background-color:white;">
<div style="background-color:#83c1ff; border: 2px solid grey;
    border-radius: 10px; align-content:center;padding:5px; size:60%;opacity: 0.7 ">
<h2 align="center">Welcome to Dhaka</h2>
</div>

<!--Slide image divission-->
<div style="background-color:#d5ffd5;  border: 1px solid grey;
    border-radius: 10px;">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="a.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="b.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="c.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="d.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
<!--About us-->
<div style="background-color: grey;  border: 2px solid red;
    border-radius: 10px;">
<h1 align="center">About Dhaka</h1>

<img src="tv1.jpg" alt="Travel Guide BD" style="width:500px;height:300px;float:left;padding-right: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p style="padding-bottom: 50px;">Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.
</br></br></br>Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit.Dhaka is the capital of Bangladesh. It has many places to visit. 
</br></br></br>travell tutorTravel Guide BD is the online travell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutortravell tutor</p>
</div>



</body>
<?php
include_once 'footer.php';
?>
</html> 
