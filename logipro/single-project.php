<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package LogiPro
 */

get_header();
?>

	<main id="primary" class="site-main">

		
         <section class="single-project" id="single-project">
         <div class="container">
            <div class="row">
            <?php
            while ( have_posts() ) :
               the_post();
            ?>
               <div class="col-lg-8">
                  <h3 class="column-title"><?php the_title();?></h3>
                  <div class="single-project-image">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid'))?>
                  </div>
                  <div class="single-project-content mt-4">
                     <?php the_content();?>
                  </div>
                  <div class="tag"><span>Category: </span>
                  <?php 
                     if ( is_singular('project') ) {
                        $terms = get_the_terms($post->ID, 'project_categories');
                        foreach ($terms as $term) {
                            $term_link = get_term_link($term, 'project_categories');
                            if (is_wp_error($term_link))
                                continue;
                            echo '<a href="' . $term_link . '">' . $term->name . '</a>, ';
                        }
                    }
                  ?>
                  </div>
                  <?php 
                  the_post_navigation(
                     array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'logipro' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'logipro' ) . '</span> <span class="nav-title">%title</span>',
                     )
                  );
                  ?>
               </div>
               <!-- col end -->
               <?php
            endwhile; // End of the loop.
            ?>   
               <div class="col-lg-4 project-right-side">
                  
                  <!-- project content end -->
                  <div class="complete-project">
                     <div class="complete-project-bg" >
                        <div class="row">
                           <div class="ts-progress-bar">
                              <h3>Project Completed</h3>
                              <div class="progress">
                                 <div class="progress-bar" style="width:<?php the_field('project_status')?>%; background:#da0f32;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-value"><?php the_field('project_status');?>%</div>
                                 </div>
                              </div>
                           </div>
                           <!-- Content row end-->
                        </div>
                        <!-- Container 2 end-->
                     </div>
                  </div>
                  
                  <div id="accordion" class="project-accordion">
                     <div class="card">
                        <div class="card-header" id="headingOne">
                           <h5 class="mb-0">
                              <button class="btn btn-link project-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <span>Locations</span>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                           <div class="card-body">
                              <p><?php the_field('location');?> </p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <button class="btn btn-link project-btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <span> Delivery Time</span>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body">
                              <p><?php the_field('delivery_time');?></p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link project-btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <span>Quantity</span>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <p><?php the_field('quantity');?></p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingFour">
                           <h5 class="mb-0">
                              <button class="btn btn-link project-btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 <span> Equipment Used</span>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                           <div class="card-body">
                              <p><?php the_field('equipment_used');?> </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <a href="" class="btn-block btn btn-primary">View Projects</a> -->
                  
               </div>
               <!-- col end -->
            </div>
            <!-- row end -->
         </div>
         <!-- main container end -->
      </section>

			

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
