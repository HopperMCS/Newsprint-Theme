<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/tether/dist/css/tether.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/tether/dist/js/tether.min.js"> </script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href="css/fonts/asar/asar.css" rel="stylesheet">
  <link href="css/fonts/bitter/bitter.css" rel="stylesheet">
</head>
<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9 post"><br>
          <h2 class="title">Posts - Newest to Oldest</h2>
          <hr class="head">
          <!-- Post start -->

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

          <div class="row">
                        <div class="col-sm-6 post">
                          <hr class="thin">
                          <div class="row">
                            <div class="col-md-8 col-sm-7">
                              <h4 class="card-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                              </h4>
                            </div>
                            <div class="col-md-4 col-sm-5">
                              <h1 class="ribbon"><strong class="ribbon-contentenido"><?php the_time( 'M j y' ); ?></strong></h1>
                            </div>
                          </div>
                          <hr class="normal">
                          <p class="card-text">
			   <?php the_content(); ?>
                           <?php edit_post_link(); ?>
                           <?php wp_link_pages(); ?></p>
                          <hr class="thick"><br>
                        </div>

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php get_sidebar(); ?>

