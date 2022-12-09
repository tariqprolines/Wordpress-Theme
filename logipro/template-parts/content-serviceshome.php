 <?php 
$args = array(
   'post_type' => 'service',
   'post_status' => 'publish',
   'posts_per_page' => 3,
   'orderby' => 'ID',
   'order' => 'DESC',
);
$query = new WP_Query($args);
 ?>
 <section class="ts-services solid-bg" id="ts-services">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>What We Do</span>Our Services</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row ts-service-row-box">
               <?php while($query->have_posts()):
                  $query->the_post();
                  $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                  ?>
               <div class="col-lg-4 col-md-12">
                  <div class="ts-service-box">
                     <div class="ts-service-image-wrapper">
                        <img class="img-fluid" src="<?php echo $image[0];?>" alt="">
                     </div>
                     <div class="ts-service-content">
                        <h3 class="service-title"><?php the_title();?></h3>
                        <p><?php the_excerpt();?></p>
                        <p><a class="link-more" href="<?php the_permalink(get_the_ID());?>">Read More<i class="icon icon-right-arrow2"></i></a></p>
                     </div>
                  </div>
                  <!-- Service1 end-->
               </div>
               <!-- Col end-->
            <?php wp_reset_query(); endwhile;?>
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Service end-->