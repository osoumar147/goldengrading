<?php
/**
* Template part for displaying posts
*
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="bg-single mb-3">
		<div class="container">
			<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" style="width: 100%;">
			<header class="entry-header-for-single-page">
				<h3 class="py-3 m-0"><?php echo the_title();?></h3>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_content();?>
				<div class="entry-content-p">
					<span class="post-author">
						Posted By:
						<i class="fa fa-user-circle" aria-hidden="true">
						</i>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> 
					</span>
					<span class="post-date">
						Posted Date:
						<i class="fa fa-calendar"></i>
						<?php the_date(); ?> 

					</span>	
				</div>
			</div>
			<?php if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;?>
	</div>
</div>
</div>
</article>
