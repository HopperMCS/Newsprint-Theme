<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="wp-content/themes/newsprint/style.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint/bower_components/tether/dist/css/tether.min.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="wp-content/themes/newsprint/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="wp-content/themes/newsprint/bower_components/tether/dist/js/tether.min.js"> </script>
  <script src="wp-content/themes/newsprint/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- <link href="wp-content/themes/newsprint-theme/css/fonts/asar/asar.css" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css?family=Brawler" rel="stylesheet">

  <link href="wp-content/themes/newsprint/css/fonts/bitter/bitter.css" rel="stylesheet">
</head>
<?php get_header(); ?>
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <hr class="thin">
          <h2 class="title">Posts - Newest to Oldest</h2>
          <hr class="head">
        <div class="card-text">
	<div class="col-md-10">
       <?php next_posts_link( '&#x2190; Older Entries' ); ?></div>
	<div class="col-md-2">
       <?php previous_posts_link( 'Newer Entries &#x2192;' ); ?></div>
       </div>
          <!-- Post start -->

<?php $i = 0; ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
if($i == 0) {
	echo '<div class="row">';
}
?>


			
                        <div class="col-md-6">
			<hr class="thin">
	   <?php
             if ( has_post_thumbnail() ) { ?>
		<center>
             <div id="featured"> 
                <?php the_post_thumbnail();
             }?>
                          <div class="row"><br>
                            <div class="col-md-8 col-sm-7">
                              <h4 class="card-title" align="left"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php 
                                                          $content = get_the_title();
                         	                                 $content = strip_tags($content);
                                                          echo substr($content, 0, 14); ?>[..]

                                                                          </a>
                              </h4>
                            </div>
                          
                            <div class="col-md-4 col-sm-5">
                              <h1 class="ribbon"><strong class="ribbon-contentenido"><?php the_time( 'M j y' ); ?></strong></h1>
                            </div>
                          </div>
           </div></center>  
                          <hr class="normal">
                          <div class="card-text">
			   <?php the_excerpt();
                                 //$content = get_the_excerpt();
                                 //$content = strip_tags($content);
                                 //echo substr($content, 0, 255); ?>
                           <?php edit_post_link(); ?>
                           <?php wp_link_pages(); ?></div>
                          <hr class="thick"><br>  
</div>

  

<?php
$i++;
if($i == 2) {
	$i = 0;
	echo '</div>';
}
?>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php
if($i > 0) {
	echo '</div>';
}
?>
<?php endif; ?>
  <!--<div class="clearfix hidden-md-up"></div>-->



<?php //get_sidebar(); ?>
 </body>
</html>


