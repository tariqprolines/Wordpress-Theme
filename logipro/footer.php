<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LogiPro
 */

?>

 <!-- Footer start-->
      <footer class="footer" id="footer">
         <div class="footer-main bg-overlay">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 footer-widget footer-about">
                     <?php 
                     if(is_active_sidebar('footer-1')):
                        dynamic_sidebar('footer-1');
                     endif;
                     ?>   
                  </div>
                  <!-- About us end-->
                  <div class="col-lg-4 col-md-6 footer-widget">
                     <?php 
                     if(is_active_sidebar('footer-2')):
                        dynamic_sidebar('footer-2');
                     endif;
                     ?> 
                  </div>
                  <div class="col-lg-4 col-md-6 footer-widget">
                    <?php 
                     if(is_active_sidebar('footer-3')):
                        dynamic_sidebar('footer-3');
                     endif;
                     ?> 
                  </div>
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="copyright-info"><span>&copy;
                     		<?php
							echo date_i18n(
								_x( 'Y', 'copyright date format', 'logipro' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
							<?php
							printf(
								/* translators: %s: WordPress. */
								esc_html__( 'Designed & Developed by %s.', 'logipro' ),
								'<a href="' . esc_url( __( 'https://prolines.sa/', 'logipro' ) ) . '">'.__('Prolines','logipro').'</a>'
							);
							?>
						</span></div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="footer-social text-right">
                        <ul>
                           <li><a href="<?php the_field('facebook','9');?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="<?php the_field('twitter','9');?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="<?php the_field('instagram','9');?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="<?php the_field('linkedin','9');?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Copyright end-->
      </footer>
      <!-- Footer end-->

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->
   </div>
   <!--Body Inner end-->

<?php wp_footer(); ?>

</body>
</html>
