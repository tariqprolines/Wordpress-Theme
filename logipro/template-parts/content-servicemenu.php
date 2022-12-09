<?php 
$id = get_the_ID();
$class;
$args = array(
   'post_type' => 'service',
   'post_status' => 'publish'
);
$query = new WP_Query($args);
$posts = $query->posts;

?>
<div class="col-lg-4">
                  <h4 class="list-column-title">Services</h4>
                  <div class="sidebar ">
                     <div class="widget no-padding no-border">
                        <ul class="service-menu">
                        	<?php 
                           foreach($posts as $post):
                           if( $id == $post->ID) {$class = 'active';} else {$class = '';}
                        	?>
                           <li><a href="<?php the_permalink(get_the_ID());?>" class="<?php echo $class; ?>"><?php echo $post->post_title;?></a></li>
                       		<?php endforeach;
                           wp_reset_query();
                           ?>
                        </ul>
                     </div>
                     <!-- <div class="widget no-padding testimonial-static">
                        <div class="quote-item quote-classic"><span class="quote-text faq-quote-text">The Forexnic loan has been  the most attractive loan products on the market, helping numerous</span>
                           <div class="quote-item-footer quote-footer-classic">
                              <img class="testimonial-thumb" src="<?php bloginfo('template_directory');?>/assets/images/clients/testimonial1.png" alt="testimonial">
                              <div class="quote-item-info">
                                 <p class="quote-author">Jhon Cameron</p><span class="quote-subtext">Manager Walton</span>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>