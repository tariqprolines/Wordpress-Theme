<?php
/*
Template Name: Home
*/
get_header();
get_template_part('template-parts/content', 'slider');
?>

<section id="ts-features-light" class="ts-features-light">
   <div class="container">
      <div class="row feature-light-row">
         <div class="col-md-4 text-center">
            <div class="ts-feature-box">
               <div class="ts-feature-info">
                  <div class="feature-img">
                     <img src="<?php echo get_theme_mod('first_core_value_icon');?>" alt="" />
                  </div>
                  <h3 class="ts-feature-title"><?php echo get_theme_mod('first_core_value_heading');?></h3>
                  <p><?php echo get_theme_mod('first_core_value_text');?></p>
               </div>
            </div>
            <!-- feature box-1 end-->
         </div>
         <!-- col-1 end-->
         <div class="col-md-4 text-center border-left">
            <div class="ts-feature-box">
               <div class="ts-feature-info">
                  <div class="feature-img">
                     <img src="<?php echo get_theme_mod('second_core_value_icon');?>" alt="" />
                  </div>
                  <h3 class="ts-feature-title"><?php echo get_theme_mod('second_core_value_heading');?></h3>
                  <p><?php echo get_theme_mod('second_core_value_text');?></p>
               </div>
            </div>
            <!-- feature box-2 end-->
         </div>
         <!-- col-2 end-->
         <div class="col-md-4 text-center border-left">
            <div class="ts-feature-box">
               <div class="ts-feature-info">
                  <div class="feature-img">
                     <img src="<?php echo get_theme_mod('third_core_value_icon');?>" alt="" />
                  </div>
                  <!--<i class="icon icon-clock3"></i>-->
                  <h3 class="ts-feature-title"><?php echo get_theme_mod('third_core_value_heading');?></h3>
                  <p><?php echo get_theme_mod('third_core_value_text');?></p>
               </div>
            </div>
            <!-- feature box-2 end-->
         </div>
         <!-- col-3 end-->
      </div>
   </div>
</section>
<!-- ts-feature light end -->

<section class="ts-service-area service-area-pattern" id="ts-service-area">
   <div class="service-area-bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <?php the_content();?>
            </div>
         </div>
      </div>
      <!-- Container end-->
   </div>
</section>
<!-- Services Section -->
<?php get_template_part('template-parts/content', 'serviceshome'); ?>
<section class="news" id="news">
   <div class="container">
      <div class="row text-center">
         <div class="col-md-12">
            <h2 class="section-title"><span>Whats going on</span>Latest News</h2>
         </div>
      </div>
      <div class="row">
         <?php 
         $args = array(
            'post_type' => 'post',
            'post_status' => 'publish'
         );
         $query = new WP_Query($args);
            while($query->have_posts()): $query->the_post();
         ?>
               <div class="col-lg-3 col-md-3">
               <div>
                           <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
                        </div>
                  <div class="latest-post">
                     <div class="post-body">
                        <?php 
                        $category = get_the_category();
                        if($category):
                        ?>
                        <span class="post-cat"><i class="icon icon-folder mr-2"></i><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) );?>"><?php echo esc_html($category[0]->name);?></a></span>
                        <?php endif;?>
                        
                        <h4 class="post-title">
                           <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h4>
                        <span class="post-item-date"><?php the_date();?></span>
                        <div class="post-text">
                           <?php the_excerpt();?>
                           <div class="text-left"><a class="btn btn-primary" href="<?php the_permalink();?>">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  <!-- Latest post end-->
               </div>
               <!-- Col end-->
      <?php endwhile;?>         
      </div>
      <!-- Content row end-->
   </div>
   <!-- Container end-->
</section>
<!-- News end-->

<section class="quote-area solid-bg" id="quote-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="quote_form">
               <h2 class="column-title "><span><?php echo get_theme_mod('call_to_action_left_super_text');?></span><?php echo get_theme_mod('call_to_action_left_heading');?></h2>
               <div class="quote-img">
                  <img class="img-fluid" src="<?php echo get_theme_mod('call_to_action_image')?>" alt="img">
               </div>
            </div>
            <!-- Quote form end-->
         </div>
         <!-- Col end-->
         <div class="col-lg-7 qutoe-form-inner-le">
            <h2 class="column-title "><span><?php echo get_theme_mod('call_to_action_right_super_text');?></span> <?php echo get_theme_mod('call_to_action_right_heading');?></h2>
            <?php echo do_shortcode( '[contact-form-7 id="193" title="Contact Form Home"]' );?>
            <!-- Form end-->
         </div>
         <!-- Col end-->
      </div>
      <!-- Content row end-->
   </div>
   <!-- Container end-->
</section>
<!-- Quote area end-->


<section class="clients-area " id="clients-area">
   <?php 
   $args = array(
      'post_type' => 'client',
      'post_status' => 'publish',
      );
   $clientQuery = new WP_Query($args);
   ?>
   <div class="container">
      <div class="row">
         <div class="col-sm-12 owl-carousel owl-theme text-center partners" id="partners-carousel">
            <?php 
            if($clientQuery->have_posts()):
               while($clientQuery->have_posts()): $clientQuery->the_post();
               $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
            ?>
            <figure class="item partner-logo">
               <a href="#">
                  <img class="img-fluid" src="<?php echo $image[0];?>" alt="">
               </a>
            </figure>
            <?php endwhile;?>
            <?php endif;?>
         </div>
         <!-- Owl carousel end-->
      </div>
      <!-- Content row end-->
   </div>
   <!-- Container end-->
</section>
<!-- Partners end-->
<?php get_footer(); ?>