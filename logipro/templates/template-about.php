<?php 
/*
 Template Name: About Us
 */
get_header();
get_template_part('template-parts/content','banner')
?>

<section class="main-container no-padding" id="main-container">

<div class="about-pattern">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 about-desc">
            <?php the_content();?>
         </div>
         <!-- Col end-->
         <div class="col-lg-6 text-md-center mrt-40">
            <?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
         </div>
         <!-- Col end-->
      </div>
      <!-- Main row end-->
   </div>
   <!-- Container 1 end-->
</div>
<!-- About pattern End-->
</section>

<section id="tw-service-value" class="tw-service-value bg-offwhite">
         <h2 class="column-title text-center">Company Progress</h2>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-lg-3 text-center">
                  <div class="percent-area">
                     <div class="chart" data-percent="<?php echo get_theme_mod('first_progress').'%';?>">
                        <p class="percent"><?php echo get_theme_mod('first_progress').'%';?></p>
                     </div>
                     <p class="column-title"><?php echo get_theme_mod('first_progress_year');?></p>
                     <!-- Chart end -->
                  </div>
                  <!-- Percent area end -->
               </div>
               <div class="col-md-3 col-lg-3 text-center">
                  <div class="percent-area">
                     <div class="chart" data-percent="<?php echo get_theme_mod('second_progress').'%';?>">
                        <p class="percent"><?php echo get_theme_mod('second_progress').'%';?></p>
                     </div>
                     <p class="column-title"><?php echo get_theme_mod('second_progress_year');?></p>
                     <!-- Chart end -->
                  </div>
                  <!-- Percent area end -->
               </div>
               <div class="col-md-3 col-lg-3 text-center">
                  <div class="percent-area">
                     <div class="chart" data-percent="<?php echo get_theme_mod('third_progress').'%';?>">
                        <p class="percent"><?php echo get_theme_mod('third_progress').'%';?></p>
                     </div>
                     <p class="column-title"><?php echo get_theme_mod('third_progress_year');?></p>
                     <!-- Chart end -->
                  </div>
                  <!-- Percent area end -->
               </div>
               <div class="col-md-3 col-lg-3 text-center">
                  <div class="percent-area">
                     <div class="chart" data-percent="<?php echo get_theme_mod('forth_progress').'%';?>">
                        <p class="percent"><?php echo get_theme_mod('forth_progress').'%';?></p>
                     </div>
                     <p class="column-title"><?php echo get_theme_mod('forth_progress_year');?></p>
                     <!-- Chart end -->
                  </div>
                  <!-- Percent area end -->
               </div>
            </div>
            <!-- Content Row End -->
         </div>
         <!-- Container End -->
      </section>

<section id="ts-features-light" class="ts-features-light">
<div class="container">
   <div class="row text-center">
      <div class="col-md-12">
         <h2 class="section-title"><?php echo get_theme_mod('corevalue_heading');?></h2>
      </div>
   </div>
   <!-- Title row end -->
   <div class="row">
      <div class="col-lg-4 col-md-4 text-center">
         <div class="ts-feature-box">
            <div class="ts-feature-info">
               <img src="<?php echo get_theme_mod('first_core_value_icon');?>" alt="">
               <h3 class="ts-feature-title"><?php echo get_theme_mod('first_core_value_heading');?></h3>
               <p><?php echo get_theme_mod('first_core_value_text');?></p>
            </div>
         </div>
         <!-- feature box-1 end-->
      </div>
      <!-- col-1 end-->
      <div class="col-lg-4 col-md-4 text-center">
         <div class="ts-feature-box">
            <div class="ts-feature-info">
               <img src="<?php echo get_theme_mod('second_core_value_icon');?>" alt="">
               <h3 class="ts-feature-title"><?php echo get_theme_mod('second_core_value_heading');?></h3>
               <p><?php echo get_theme_mod('second_core_value_text');?></p>
            </div>
         </div>
         <!-- feature box-2 end-->
      </div>
      <!-- col-2 end-->
      <div class="col-lg-4 col-md-4 text-center">
         <div class="ts-feature-box">
            <div class="ts-feature-info">
               <img src="<?php echo get_theme_mod('third_core_value_icon');?>" alt="">
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
<!-- feature light end -->

<?php 
get_footer();
?>