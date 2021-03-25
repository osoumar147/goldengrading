<?php /*The header for our theme */ ?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row mx-0 align-items-center">
				<div class="col-lg-1 col-md-2 col-sm-6 col-6 pl-0">		
					<div class="site-branding">
						<?php the_custom_logo();?>
					</div>
				</div>
				<div class="col-lg-11 col-md-10 col-sm-6 col-8">
					<nav id="site-navigation" class="main-navigation">
						
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
