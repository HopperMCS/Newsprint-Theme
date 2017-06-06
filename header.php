<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="wp-content/themes/newsprint/style.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint/bower_components/tether/dist/css/tether.min.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="wp-content/themes/newsprint/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="wp-content/themes/newsprint/bower_components/tether/dist/js/tether.min.js"> </script>
  <script src="wp-content/themes/newsprint/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href="wp-content/themes/newsprint/css/fonts/asar/asar.css" rel="stylesheet">
  <link href="wp-content/themes/newsprint/css/fonts/bitter/bitter.css" rel="stylesheet">
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<html>
  <body>
    <div class="container">
      <hr class="thin">
      <div class="row header">
        <h1 class="title col-md-8 header text">
	<img width="45px" height="45px" src="wp-content/themes/newsprint/images/header.png">
	G-FED
	<a class="github-button" href="https://github.com/MGageMorgan/Newsprint-Theme/archive/master.zip" data-size="large" aria-label="Download MGageMorgan/Newsprint-Theme on GitHub">Download The "Newsprint" Theme</a>
	<a class="github-button" href="https://github.com/MGageMorgan" data-size="large" data-show-count="true" aria-label="Follow @MGageMorgan on GitHub">Follow @MGageMorgan</a>&nbsp;
	</h1>&nbsp;
        <div class="col-md-3 header push-md-1">	
	<center><div class="text title tagline"><?php bloginfo( $show = 'description' ); ?></strong></center>
	</div>
      </div>
      <div class="row tabs">
        <div class="col-md-12">
          <hr class="head">
          <ul class="nav nav-tabs">
         <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">
    <strong>Your local time is <script src="wp-content/themes/newsprint/js/localtime.js"></script></strong></a></li>
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#"><strong>
<script>
$.get("http://ipinfo.io", function (response) {
    $("#address").html("Your Current Location: " + response.city + ", " + response.region);
    $("#details").html(JSON.stringify(response, null, 4));
}, "jsonp");
</script>
<div id="ip"></div>
<div id="address"></div>
</a></li></strong>
 <li class="nav-item">
<div class="dropdown">
  </li>
<!--
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rants"><strong>Rants</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><strong>Christoffen</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><strong>Theory</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><strong>Archive</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><strong>Personal Projects</strong></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
