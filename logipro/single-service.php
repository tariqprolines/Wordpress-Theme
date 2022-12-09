<?php 
	get_header();
	get_template_part('template-parts/content','banner');
?>

<section class="main-container" id="main-container">
         <div class="container">
            <div class="row">
               <?php 
               get_template_part('template-parts/content','servicemenu');
               ?>
               <!-- Col end -->
               <div class="col-lg-8">
                  <div class="single-service-img">
                     <?php the_post_thumbnail();?>
                  </div>
                  <div class="service-content">
                     <h2><?php the_title();?></h2>
                     
                     <div class="text-block mrb-40">
                     	<?php the_content(); ?>
                     </div>                  
                       
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php get_footer();?>