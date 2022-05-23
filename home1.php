<!DOCTYPE html>
<html>
    <head>
        <title>NOT the Part of S/W</title>
     
        <head>
  <style>

.bg {
  /* The image used */
  background-image: url("images/img_girl.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>

<body>
  <!-- Container for the image gallery -->
<div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 6</div>
    <img src="images/img_woods_wide.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="images/img_5terre_wide.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="images/img_mountains_wide.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="images/img_lights_wide.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="images/img_nature_wide.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="images/img_snow_wide.jpg" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row">
  <div class="column">
    <img class="demo cursor" src="images/img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
  </div>
</div>
</div> 
</body>

</html>

