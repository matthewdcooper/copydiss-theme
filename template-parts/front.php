<?php
/**
 * @package Copydiss
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 95vw">
	<header class="entry-header">
		<div class="title-placeholder" style="height: 2.5rem"></div>
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				copydiss_posted_on();
				copydiss_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php copydiss_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'copydiss' ),
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
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'copydiss' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php copydiss_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
