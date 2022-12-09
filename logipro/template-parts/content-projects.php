<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
   'post_type' => 'project',
   'post_status' => 'publish',
   'paged' => $paged,
);
$query = new WP_Query($args);
?>
<!--Project Start-->
<section class="projects" id="projects">
   <div class="container">
      <div class="row text-center">
         <div class="col-md-12">
            <?php the_content(); ?>
         </div>
      </div>
      <div class="row ">
         <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
               <div class="col-lg-4 mt-4">
                  <div class="latest-post post-large project-post-large">
                     <div class="latest-post-media project-post-media">
                        <a class="latest-post-img" href="<?php the_permalink(); ?>">
                           <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                        </a>
                        <div class="post-body project-body project-post-body">
                           <a class="post-cat" href="project-single.html"><?php the_title(); ?></a>
                           <a class="btn btn-primary" href="<?php the_permalink(); ?>"><?php _e('Read More', 'logipro') ?></a>
                        </div>
                        <!-- Post body end-->
                     </div>
                     <!-- Post media end-->
                  </div>
                  <!-- Latest post end-->
               </div>
            <?php endwhile; ?>
      </div>
      <!-- Start the pagination functions after the loop. -->
      <div>
         <?php
            echo "<div class='pagination mt-3'>" . paginate_links(array(
               'total' => $query->max_num_pages,
               'prev_text' => __('<span class="preious-page">Prev</span>'),
               'next_text' => __('<span class="next-page">Next</span>')
            )) . "</div>";
         ?>
      </div>
      <!-- End the pagination functions after the loop. -->
   <?php endif; ?>
   </div>
   </div>
   <!-- Container end-->
</section>
<!-- Projects end-->