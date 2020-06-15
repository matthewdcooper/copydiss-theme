<?php
/**
 * @package Copydiss
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'copydiss' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>We're sorry, but it looks like there's nothing here yet. Maybe return <a href="/">home</a> or try a search?</p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
