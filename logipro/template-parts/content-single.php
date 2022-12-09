<?php 
/**
 * Template part for displaying single post
 * 
 * @package LogiPro
 * 
 */
?>


					<div class="post-content">
						<div class="post-media post-image ">
							<?php the_post_thumbnail('full', array('class' => 'img-fluid'));?>
						</div>

						<div class="post-body">
                     <div class="entry-header">
                     <div class="post-meta">
                        <?php 
                        $category = get_the_category();
                        if($category):
                        ?>
                        <span class="post-cat"><i class="icon icon-folder"></i><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) );?>"><?php echo esc_html($category[0]->name);?></a></span>
                        <?php 
                        endif;
                        $tag_list = get_the_tag_list( '', ' ' );
                        if($tag_list):
                        ?>
                        <span class="post-tag"><i class="icon icon-tag"></i><a href="#"><?php echo $tag_list;?></a></span>
                        <?php endif;?>
                     </div>
                        <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                     </div>
                     <!-- header end-->

							<div class="entry-content">
                                <?php the_content();?>
							</div>

						
						</div><!-- post-body end -->
					</div><!-- post content end -->
                    <?php 
                    $fname = get_the_author_meta('first_name');
                    $lname = get_the_author_meta('last_name');
                    $fullname = '';
                    $fullname = $fname.' '.$lname;
                    $display_name = get_the_author_meta('display_name');
                    $description = get_the_author_meta('description');
                    $website_url = get_the_author_meta('user_url');
                    $user = wp_get_current_user();
                    ?>
					<div class="author-box">
						<div class="author-img pull-left">
							<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="">
						</div>
						<div class="author-info">
							<h3><?php echo $fullname;?><span><?php echo $display_name;?></span></h3>
							<p><?php echo $description;?></p>
							<p class="author-url">Website: <span><a href="<?php echo $website_url;?>"><?php echo $website_url;?></a></span></p>

						</div>
					</div> <!-- Author box end -->


					