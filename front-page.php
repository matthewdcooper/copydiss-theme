<?php
/**
 * @package Copydiss
 */

get_header();
?>
	<div id="internet_explorer" style="display: none;" >
		<p>WARNING: You are using an unsupported browser and some things might not work. Please consider using a modern browser, such as <a href="https://www.mozilla.org/en-GB/firefox/new/">Firefox</a>.</p>
	</div>

	<main id="primary" class="site-main">

      <?php
			while ( have_posts() ) :
        the_post();

				get_template_part( 'template-parts/front', 'page' );

			endwhile; // End of the loop.
			?>

    </main><!-- #main -->

<?php
get_footer();
