<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="wp-content/themes/newsprint-theme/style.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint-theme/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint-theme/bower_components/tether/dist/css/tether.min.css">
  <link rel="stylesheet" href="wp-content/themes/newsprint-theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="wp-content/themes/newsprint-theme/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="wp-content/themes/newsprint-theme/bower_components/tether/dist/js/tether.min.js"> </script>
  <script src="wp-content/themes/newsprint-theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- <link href="wp-content/themes/newsprint-theme/css/fonts/asar/asar.css" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css?family=Brawler" rel="stylesheet">

  <link href="wp-content/themes/newsprint-theme/css/fonts/bitter/bitter.css" rel="stylesheet">
</head>
<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"><div class="post">
          <center>
<style>

#featured {
   background: gray; /* For browsers that do not support gradients */
   background: -webkit-linear-gradient(white, gray); /* For Safari 5.1 to 6.0 */
   background: -o-linear-gradient(white, gray); /* For Opera 11.1 to 12.0 */
   background: -moz-linear-gradient(white, gray); /* For Firefox 3.6 to 15 */
   background: linear-gradient(white, gray); /* Standard syntax (must be last) */
   margin-top: 15px;
   padding: 25px;
}	

</style>
           <?php
             if ( has_post_thumbnail() ) { ?>

             <div id="featured"> 
                <?php the_post_thumbnail();
             }
           ?></div></center>

	<div class="body">
          <hr class="thin">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="row"><div class="col-xs-8">
            <h2 class="title"><?php the_title(); ?></h2></div><div class="col-xs-4" align="right">
            <!--<img src="wp-content/themes/newsprint-theme/images/avatar4.jpg" class="avatar"><img>-->
           <?php the_author(); ?>&nbsp; on <?php the_date(); ?><br></div></div>
            <hr class="thick"><br>
          <o><?php the_content(); ?></p>
          <center class="card-text">
            <hr class="thin">Categories: <?php $categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
} ?>
              Tags: <a href="#">On a Tuesday</a>
          <?php endwhile; ?>
            <hr class="thin"><br><br>
          </center>
</div>
        </div>
        <?php get_footer(); ?>
      </div>
</div>
    </div></div>
  </body>
</html>
