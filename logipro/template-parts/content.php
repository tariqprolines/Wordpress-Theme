<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LogiPro
 */

?>

<div class="post news-post">
	<div class="post-media post-image">
		<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
	</div>
	<div class="post-body clearfix">
		<!-- Post meta left-->
		<div class="post-content">
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
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</div>
			<!-- header end-->
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
			<div class="post-footer "><a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More ...</a></div>
		</div>
		<!-- Post content right-->
	</div>
	<!-- post-body end-->
</div>