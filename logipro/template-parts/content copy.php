<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LogiPro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
<div class="row">
               <div class="col-lg-8">
                  <div class="post news-post">
                     <div class="post-media post-image">
                        <img class="img-fluid" src="images/news/news3.jpg" alt="">
                     </div>
                     <div class="post-body clearfix">
                        <!-- Post meta left-->
                        <div class="post-content">
                           <div class="entry-header">
                              <div class="post-meta"><span class="post-cat"><i class="icon icon-folder"></i><a href="#"> Financial Planning</a></span>
                                 <span class="post-tag"><i class="icon icon-tag"></i><a href="#"> Insurance, Business</a></span>
                              </div>
                              <h2 class="entry-title"><a href="news-single.html">Uber is selling off its auto-leasing business</a></h2>
                           </div>
                           <!-- header end-->
                           <div class="entry-content">
                              <p>Financial engagements typically multifaceted solving specific digital marketing and challenges
                                 while building ongoing client capabilities. In addition to defining newer roles but helping
                                 develop...
                              </p>
                           </div>
                           <div class="post-footer "><a class="btn btn-primary" href="news-single.html">Read More ...</a></div>
                        </div>
                        <!-- Post content right-->
                     </div>
                     <!-- post-body end-->
                  </div>
                  <!-- 1st post end-->
                  <div class="post news-post">
                     <div class="post-media post-video">
                        <img class="img-fluid" src="images/news/news2.jpg" alt="">
                        <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                           <div class="video-icon"><i class="icon icon-play"></i></div>
                        </a>
                     </div>
                     <div class="post-body clearfix">
                        <div class="post-content">
                           <div class="entry-header">
                              <div class="post-meta"><span class="post-cat"><i class="icon icon-folder"></i><a href="#"> Financial Planning</a></span>
                                 <span class="post-tag"><i class="icon icon-tag"></i><a href="#"> Insurance, Business</a></span>
                              </div>
                              <h2 class="entry-title"><a href="news-single.html">Apple reveals its new Melbourne flagship store</a></h2>
                           </div>
                           <!-- header end-->
                           <div class="entry-content">
                              <p>Financial engagements typically multifaceted solving specific digital marketing and challenges
                                 while building ongoing client capabilities. In addition to defining newer roles but helping
                                 develop...
                              </p>
                           </div>
                           <div class="post-footer "><a class="btn btn-primary" href="news-single.html">Read More ...</a></div>
                        </div>
                        <!-- Post content right-->
                     </div>
                     <!-- post-body end-->
                  </div>
                  <!-- 3rd post end-->
                  <div class="post news-post">
                     <div class="post-media post-image">
                        <img class="img-fluid" src="images/news/news1.jpg" alt="">
                     </div>
                     <div class="post-body clearfix">
                        <div class="post-content">
                           <div class="entry-header">
                              <div class="post-meta"><span class="post-cat"><i class="icon icon-folder"></i><a href="#"> Financial Planning</a></span>
                                 <span class="post-tag"><i class="icon icon-tag"></i><a href="#"> Insurance, Business</a></span>
                              </div>
                              <h2 class="entry-title"><a href="news-single.html">Help your business grow with help from social media tool</a></h2>
                           </div>
                           <!-- header end-->
                           <div class="entry-content">
                              <p>Financial engagements typically multifaceted solving specific digital marketing and challenges
                                 while building ongoing client capabilities. In addition to defining newer roles but helping
                                 develop...
                              </p>
                           </div>
                           <div class="post-footer "><a class="btn btn-primary" href="news-single.html">Read More ...</a></div>
                        </div>
                        <!-- Post content right-->
                     </div>
                     <!-- post-body end-->
                  </div>
                  <!-- 4th post end-->
               </div>
               <!-- Content Col end-->
               <div class="col-lg-4">
                  <div class="sidebar sidebar-right">
                     <div class="widget widget-search">
                        <div class="input-group" id="search">
                           <input class="form-control" placeholder="Search" type="search"><span class="input-group-btn"><i class="fa fa-search"></i></span>
                        </div>
                     </div>
                     <div class="widget recent-posts">
                        <h3 class="widget-title">Popular Posts</h3>
                        <ul class="unstyled clearfix">
                           <li class="media">
                              <div class="media-left media-middle">
                                 <img alt="img" src="images/news/news1.jpg">
                              </div>
                              <div class="media-body media-middle"><span class="post-date"><i class="icon icon-calendar-full"></i><a href="#"> 19 Jan, 2018</a></span>
                                 <h4 class="entry-title"><a href="news-single.html">Uber is selling off its auto-leasing</a>
                                    <small>by Jhon</small>
                                 </h4>
                              </div>
                              <div class="clearfix"></div>
                           </li>
                           <!-- 1st post end-->
                           <li class="media">
                              <div class="media-left media-middle">
                                 <img alt="img" src="images/news/news2.jpg">
                              </div>
                              <div class="media-body media-middle"><span class="post-date"><i class="icon icon-calendar-full"></i><a href="#"> 24 Jan, 2018</a></span>
                                 <h4 class="entry-title"><a href="news-single.html">Apple reveals its new flagship</a>
                                    <small>by Jhon</small>
                                 </h4>
                              </div>
                              <div class="clearfix"></div>
                           </li>
                           <!-- 2nd post end-->
                           <li class="media">
                              <div class="media-left media-middle">
                                 <img alt="img" src="images/news/news3.jpg">
                              </div>
                              <div class="media-body media-middle"><span class="post-date"><i class="icon icon-calendar-full"></i><a href="#"> 27 Jan, 2018</a></span>
                                 <h4 class="entry-title"><a href="news-single.html">Help your business grow with help</a>
                                    <small>by Jhon</small>
                                 </h4>
                              </div>
                              <div class="clearfix"></div>
                           </li>
                           <!-- 3rd post end-->
                        </ul>
                     </div>
                     <!-- Recent post end-->
                  </div>
                  <!-- Sidebar end-->
               </div>
               <!-- Sidebar Col end-->
            </div>
            <!-- Main row end-->

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				logipro_posted_on();
				logipro_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php logipro_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'logipro' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'logipro' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php logipro_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
