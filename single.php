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
  <!-- <link href="wp-content/themes/newsprint/css/fonts/asar/asar.css" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css?family=Brawler" rel="stylesheet">

  <link href="wp-content/themes/newsprint/css/fonts/bitter/bitter.css" rel="stylesheet">
</head>
<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"><div class="post">
          <center>
           <?php
             if ( has_post_thumbnail() ) { ?>

             <div id="singl"><hr class="thin"> 
                <?php the_post_thumbnail();
             }
           ?>

	<div class="body">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="row"><div class="col-xl-6"><br>
            <h2 class="title" id="site" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<?php the_title(); ?></h2>
		<div id="singlborder"></div>            
	</div>
	<div id="auth" class="col-xl-6" align="right"><p id="singinfo"><b>
            <!--<img src="wp-content/themes/newsprint/images/avatar4.jpg" class="avatar"><img>-->
           <?php the_author(); ?>&nbsp; on <?php the_date(); ?><br>

Categories: <?php $categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
} ?></p></b>



&nbsp;&nbsp;</div></div><hr class="head">
            </div></center><?php echo "\n" ?>
          <p><?php the_content(); ?></p>
          
          <?php endwhile; ?>
            <br><br>
          </center>
</div>
        </div>
        <?php get_footer(); ?>
      </div>
</div>
    </div></div>
  </body>
</html>
