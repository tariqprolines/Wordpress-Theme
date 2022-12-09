<?php 
/**
 * Template Name: Contact
 */
get_header();
get_template_part('template-parts/content','banner');
?>
<section class="main-container contact-area" id="main-container">
         <div class="contact-map">
             <?php the_content();?>
         </div>
         <div class="gap-60"></div>
         <div class="ts-form form-boxed" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="contact-wrapper full-contact">
                     <div class="col-lg-6">
                         <h3 class="column-title">Contact Us</h3>
                         <p class="contact-content"><?php the_field('contact_text');?></p>
                        <div class="contact-info-box contact-box info-box ">
                           <div class="contact-info">
                              <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                                 <div class="ts-contact-content">
                                    <h3 class="ts-contact-title">Find Us</h3>
                                    <p><?php the_field('address');?></p>
                                 </div>
                                 <!-- Contact content end-->
                              </div>
                              <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                                 <div class="ts-contact-content">
                                    <h3 class="ts-contact-title">Call Us</h3>
                                    <p><?php the_field('contact_number');?></p>
                                 </div>
                                 <!-- Contact content end-->
                              </div>
                              <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                                 <div class="ts-contact-content">
                                    <h3 class="ts-contact-title">Mail Us</h3>
                                    <p><?php the_field('email')?></p>
                                 </div>
                                 <!-- Contact content end-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Contact info end -->
                     <div class="col-lg-6">
                         <h3 class="column-title">Contact Now</h3>
                        <div class="contact-submit-box contact-box form-box">
                        <?php echo do_shortcode( '[contact-form-7 id="197" title="Contact Form"]' );?>
                        </div>
                     </div>
                     <!-- Contact form end -->
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer();?>