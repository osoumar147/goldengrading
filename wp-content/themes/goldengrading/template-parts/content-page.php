

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( !is_front_page() ) {?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="banner__section" style="background-image: url('<?php echo $thumb['0'];?>')">
		<h1 class="banner__title"><?php the_title();?></h1>
	</div>

<?php }
 else {

// Everything else

}
?>

	
	<div class="entry-content pb-4">
		<div class="container">
			<?php the_content();?>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
