        <footer id="colophon" class="site-footer">
			<div class="site-info">
				<div class="container px-0">
					<div class="row mx-0 footer_content">
						<div class="footer__col">
							<?php if ( is_active_sidebar( 'footer-logo' ) ) { ?>
								<?php dynamic_sidebar( 'footer-logo' ); ?>
							<?php } ?>
						</div>
						<div class="footer__col pt-lg-3">
							<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
								<?php dynamic_sidebar( 'footer-1' ); ?>
							<?php } ?>
						</div>
						<div class="footer__col pt-lg-3">
							<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
								<?php dynamic_sidebar( 'footer-2' ); ?>
							<?php } ?>
						</div>
						<div class="footer__col pt-lg-3 social_icons text-center">
							<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
								<?php dynamic_sidebar( 'footer-3' ); ?>
							<?php } ?>
						</div>
					</div>
		            <div class="col-12 px-0 copyright-text text-center">
		            	<?php if ( is_active_sidebar( 'copyright-text' ) ) { ?>
							<?php dynamic_sidebar( 'copyright-text' ); ?>
						<?php } ?>
		            	
		            </div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
		<a href="javascript:" id="return-to-top">
			<i class="fa fa-chevron-up" aria-hidden="true"></i>
		</a>
		<script>
		// ===== Scroll to Top ==== 
		    jQuery(window).scroll(function() {
		        if (jQuery(this).scrollTop() >= 150) {        // If page is scrolled more than 50px
		            jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
		        } else {
		            jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
		        }
		    });
		    jQuery('#return-to-top').click(function() {      // When arrow is clicked
		        jQuery('body,html').animate({
		            scrollTop : 0                       // Scroll to top of body
		        }, 500);
		    });
		 </script>
    </div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
