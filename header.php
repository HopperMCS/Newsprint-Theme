<?php get_template_part( 'templates/head' ); ?>

<html>
  <body>
    <div class="container">
      <br><br><hr class="thin">
      <div class="row header">
        <h1 class="title col-md-8 header text">
	<img width="45px" height="45px" src="<?php echo get_theme_file_uri( 'images/header.png' ); ?>">
	<?php bloginfo( $show = 'name', $filter = 'raw' ); ?>
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
    <strong>Your local time is <script src="<?php echo get_theme_file_uri( 'js/localtime.js' ); ?>"></script></strong></a></li>
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
