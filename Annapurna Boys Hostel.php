<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Example</title>
<link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body{
background-image:url("data:image/jpeg;base64,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");
  background-repeat:no-repeat;
  background-size:200%;
  height:150%;
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
left: 9px;
width: 8px;
height: 8px;
border-radius: 50%;
background: white;
}
img{
height:400px;
width:100%;

}
.tab{
border:5px solid black;
background-color:RGB(205, 11, 212);
}
</style>  
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row mb-2">
        <div class="col-12 text-center pt-3">
            <h1 style="color:white;font-size:50px;font-family:Cooper"><b>Annapurna    Boys  Hostel<b></h1>
            <!--<p>Sree sainath nagar,A.Rangampeta,Tirupati</p>-->
        </div>
    </div>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="download.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="hostel1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="download.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)" style="font-size:2px;">&#10094;</a>
<a class="next" onclick="plusSlides(1)" style="font-size:2px;">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
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
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

<div class="container ">
  <h1 style="color:white;"><b><i>Details of the hostel</i></b> </h1>
  <div class="tab">
  <table class="table table-hover" border="2px solid red"  width="100%">
    <tr><td><h1><strong>Name of the Hostel: </strong>Annapurna Boys Hostel</h1></td></tr>
<tr><td><h1><strong>OwnerName:KishoreReddy</strong></h1></td></tr>
<tr><td><h1><strong>Owner Contact: </strong>9666444210</h1></td></tr>
<tr><td><h1><strong>Address:</strong>Sree sainath nagar,A.Rangampeta Tirupati 517102</h1></td></tr>

<tr><td><h1><strong>Hostel Facilities:<br>1.wifi<br>2.Hot water<br>3.CC camera<br>4.Mineral Water<br></strong></td></tr>
<tr><td><h1><strong><h1><b>Room Share Available</b></h1>
     <label class="container">Three
      <input type="radio" checked="checked" name="radio">
      <span class="checkmark"></span>
     </label>
     <label class="container">Four
     <input type="radio" name="radio">
     <span class="checkmark"></span>
     </label>
     <label class="container">Five
     <input type="radio" name="radio">
     <span class="checkmark"></span>
     </label></strong></h1></td></tr>
<tr><td><h1><strong>Total Vacancies Available: </strong>10</h1></td></tr>
<tr><td><h1><strong>Fee:</strong><br>
<strong>Per Month:</strong>4500/-<br></h1></td></tr>
  </table>
  </div>
</div>
<!--<button class="button" align="center">Apply Now</button>-->
<div class="container">
  <button type="button" class="btn btn-primary btn-lg"><h2>Apply Now</h2></button>
</div>
</body>
</html>