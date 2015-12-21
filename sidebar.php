<?php namespace Leean;
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Leean
 */

tha_sidebars_before();
?>

<div id="secondary" class="widget-area" role="complementary">

	<?php tha_sidebar_top(); ?>

	<?php do_action( 'before_sidebar' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">

			<h4 class="widget-title">
				<?php esc_html_e( 'Archives', TRANSLATED_TEXT_DOMAIN ); ?>
			</h4>

			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>

		</aside>

		<aside id="meta" class="widget">

			<h4 class="widget-title">
				<?php esc_html_e( 'Meta', TRANSLATED_TEXT_DOMAIN ); ?>
			</h4>

			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>

		</aside>

<?php endif; ?>

<?php tha_sidebar_bottom(); ?>

</div>

<?php tha_sidebars_after(); ?>
