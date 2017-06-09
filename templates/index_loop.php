<?php 
$i = 0; 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 

   if($i == 0) {
      echo '<div class="row">';
   }

?>

<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <?php if ( has_post_thumbnail() ) { ?>
   <hr class="thin">
   <center>
   <div id="featured"> 
      <?php the_post_thumbnail(); ?>
      <div class="row">
      <br>
         <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <h4 class="card-title" align="left">
               <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> 
               <?php $content = get_the_title();
                     $content = strip_tags($content);
                     echo substr($content, 0, 50); 
               ?>
               </a>
            </h4>
         </div>
              
         <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">            
            <h1 class="ribbon">
               <strong class="ribbon-contentenido">
                  <center>
                     <b>
                        <?php 
                           $date = get_the_date(); 
                           echo $date;
                        ?>
                     </b>
                  </center>
               </strong>
            </h1>
         </div>
      </div>
   </div>
   </center>  

   <div class="card-text">
      <?php the_excerpt(); ?>                               
      <?php edit_post_link(); ?>
      <?php wp_link_pages(); ?>
   </div>
   <hr class="thick"><br>  
</div>
<?php } else { ?>
   <hr class="thin"> 
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
     <!--<div class="container">-->
<div class="row">

         <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <h4 class="card-title" align="left">
               <a class="white" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> 
               <?php $content = get_the_title();
                     $content = strip_tags($content);
                     echo substr($content, 0, 50); 
               ?>
               </a>
            </h4>
         </div>
              
         <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <h1 class="ribbon">
               <strong class="ribbon-contentenido">
                  <center>
                     <b>
                        <?php 
                           $date = get_the_date(); 
                           echo $date;
                        ?>
                     </b>
                  </center>
               </strong>
            </h1>
         </div>
      
   </div>
<hr><div class="row">
   <div class="card-text">
      <?php the_excerpt(); ?>                               
      <?php edit_post_link(); ?>
      <?php wp_link_pages(); ?>
   </div>
   <hr class="thick"><br></div>
</div></div>
<?php } ?>













<?php
$i++;
if($i == 2) {
	$i = 0;
	echo '</div>';
}

endwhile; /* rewind or continue if all posts have been fetched */ 

if($i > 0) {
	echo '</div>';
}

endif; 
?>
