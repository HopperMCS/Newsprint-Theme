<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://www.gagesblog.com/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://www.gagesblog.com/bower_components/tether/dist/css/tether.min.css">
  <link rel="stylesheet" href="http://www.gagesblog.com/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="http://www.gagesblog.com/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="http://www.gagesblog.com/bower_components/tether/dist/js/tether.min.js"> </script>
  <script src="http://www.gagesblog.com/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href="http://www.gagesblog.com/css/fonts/asar/asar.css" rel="stylesheet">
  <link href="http://www.gagesblog.com/css/fonts/bitter/bitter.css" rel="stylesheet">
</head>
<html>
  <body>
    <div class="container">
      <hr class="thin">
      <div class="row header">
        <h1 class="title col-md-6 header text"><img width="45px" height="45px" src="wp-content/themes/newsprint-theme/images/header.png">M. Gage Morgan's Blog</h1>&nbsp;<strong class="tagline"><?php bloginfo( $show = 'description' ); ?></strong>
        <div class="col-md-2 header push-md-4"><i class="fa fa-facebook-square fa-3x" aria-hidden="true">&nbsp;         </i><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></div>
      </div>
      <div class="row tabs">
        <div class="col-md-12">
          <hr class="head">
          <ul class="nav nav-tabs">
         <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">
    <strong>Your local time is <script src="wp-content/themes/newsprint-theme/js/localtime.js"></script></strong></a></li>
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
