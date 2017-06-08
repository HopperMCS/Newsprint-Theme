<div class="container">
   <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">            
         <div class="post">
         <center>

            <?php
               if ( has_post_thumbnail() ) { 
            ?>

            <div id="singl">
               <hr class="thin"> 

               <?php 
                     the_post_thumbnail();
                  }
               ?>

               <div class="body">

                  <?php 
                     while ( have_posts() ) : the_post(); 
                  ?>

                  <div class="row">
                     <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">            
                     <br>
                     <h2 class="title" id="site" align="left">
                        &nbsp;&nbsp;&nbsp;&nbsp;<?php the_title(); ?>
                     </h2>

		        <div id="singlborder">
                        </div> 
           
	             </div>
	             <div id="auth" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="right">
                        <p id="singinfo">
                           <b>

                           <?php 
                              the_author(); 
                           ?>

                           &nbsp; on 

                           <?php 
                              the_date(); 
                           ?>

                           <br>

                           Categories: 

                           <?php 
                              $categories = get_the_category();
                              $separator = ' ';
                              $output = '';

                              if ( ! empty( $categories ) ) {
                                 foreach( $categories as $category ) {
                                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                 }

                                 echo trim( $output, $separator );
                              } 
                              ?>

                        </p>
                     </b>
                     &nbsp;&nbsp;
                  </div>
               </div>
               <hr class="head">
            </div>
            </center>

            <?php 
               echo "\n" 
            ?>

            <p>

               <?php 
                  the_content(); 
               ?>

            </p>

            <?php 
               endwhile; 
            ?>

            <br>
            <br>
            </center>
         </div>
      </div>

        <?php 
           get_footer(); 
        ?>

   </div>
</div>
</div>
</div>
