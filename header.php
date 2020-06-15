<?php
/**
 *
 * @package Copydiss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<title><?php get_bloginfo(); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="logo">
				<?php the_custom_logo(); ?>
			</div>


			<?php if (is_front_page()): ?>
				<div class="message">
					<p><?php echo get_theme_mod('copydiss_front_page_message'); ?></p>
				</div>
				
			<?php endif; ?>

			<div class="contact useful-box">
				<p><?php echo get_theme_mod('copydiss_contact_address_first_line'); ?><br />
				<?php echo get_theme_mod('copydiss_contact_address_second_line'); ?></p>

				<p>
					<a class="contact_link" href="mailto:<?php echo get_theme_mod('copydiss_contact_email'); ?>">
						<?php echo get_theme_mod('copydiss_contact_email'); ?>
					</a>
				</p>

				<p>
					<a class="contact_link" href="tel:<?php echo get_theme_mod('copydiss_contact_phone'); ?>">
						<?php echo get_theme_mod('copydiss_contact_phone'); ?>
					</a>
				</p>
			</div>


			<nav id="site-navigation" class="main-navigation">
				<?php 
				
				$menu_name = get_theme_mod('copydiss_navigation_menu');
				if ($menu_name) {
					wp_nav_menu( array(
						'menu' => $menu_name,
					) );
				}
				?>

			</nav><!-- #site-navigation -->
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
