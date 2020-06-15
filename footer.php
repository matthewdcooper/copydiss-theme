<?php
/**
 *
 * @package Copydiss
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p><?php echo get_theme_mod('copydiss_copyright_notice') ?></p>

			<?php 
			
			$menu_name = get_theme_mod('copydiss_footer_menu');
			if ($menu_name) {
				wp_nav_menu( array(
					'menu' => $menu_name,
				) );
			}
			?>

			<div>
			<?php echo get_theme_mod('copydiss_company_number') ?> <br />
			<?php echo get_theme_mod('copydiss_company_address') ?> <br />
			<?php echo get_theme_mod('copydiss_company_vat') ?> <br />
			</div>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
