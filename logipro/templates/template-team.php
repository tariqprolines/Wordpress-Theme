<?php 
/**
 * Template Name: Team
 */
get_header();
get_template_part('template-parts/content','banner');

$args = array(
   'post_type' => 'member',
   'post_status' => 'publish',
);
$query = new WP_Query($args);
?>
<section class="ts-team solid-bg">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                <?php the_content(); ?>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
            <?php if($query->have_posts()):?>
               <?php while($query->have_posts()): $query->the_post();?>
               <div class="col-lg-3 col-md-6">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <?php the_post_thumbnail('full',array('class' => 'img-fluid'))?>
                     </div>
                     <div class="ts-team-content">
                        <h3 class="team-name"><?php the_title();?></h3>
                        <p class="team-designation"><?php the_field('designation')?></p>
                     </div>
                     <!-- Team content end-->
                     <div class="team-social-icons">
                     <?php if( get_field('facebook') ): ?>
                        <a target="_blank" href="<?php the_field('facebook');?>"><i class="fa fa-facebook"></i></a>
                     <?php endif; ?>   
                     <?php if( get_field('twitter') ): ?>
                        <a target="_blank" href="<?php the_field('twitter');?>"><i class="fa fa-twitter"></i></a>
                     <?php endif; ?>
                     <?php if( get_field('instagram') ): ?>   
                        <a target="_blank" href="<?php the_field('instagram');?>"><i class="fa fa-instagram"></i></a>
                     <?php endif; ?>  
                     <?php if( get_field('linkedin') ): ?>  
                        <a target="_blank" href="<?php the_field('linkedin');?>"><i class="fa fa-linkedin"></i></a>
                     <?php endif; ?>  
                     </div>
                     <!-- social-icons-->
                  </div>
                  <!-- Team wrapper 1 end-->
               </div>
               <!-- Col end-->
               <?php endwhile;?>
            <?php endif;?>
            </div>
            
         </div>
         <!-- Container end-->
      </section>
<?php get_footer();?>