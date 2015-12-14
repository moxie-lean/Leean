<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Lean
 * @subpackage partials
 * @since 1.0.0
 */

?>
<?php tha_entry_before(); ?>
<article class="entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	itemscope itemType="http://schema.org/WebPage">
	<?php tha_entry_top(); ?>
	<header class="entry__header">

		<h1 class="entry__title" itemprop="name"><?php the_title(); ?></h1>

	</header>


	<div class="entry__content entry__a--transition" itemprop="mainContentOfPage">

		<?php the_content(); ?>

		<?php
		if ( function_exists( 'the_post_navigation' ) ) :
				the_post_navigation( array(
					'prev_text'	=> esc_html__( '&larr; Previous Page', TRANSLATED_TEXT_DOMAIN ),
					'next_text'	=> esc_html__( 'Next Page &rarr;', TRANSLATED_TEXT_DOMAIN ),
					'screen_reader_text' => esc_html__( 'Page navigation', TRANSLATED_TEXT_DOMAIN ),
				));
		else :
			wp_link_pages(
				array(
					'before' => '<div class="page__links">' . esc_html__( 'Pages:', TRANSLATED_TEXT_DOMAIN ),
					'after'  => '</div>',
				)
			);
		endif;
		?>
	</div>
	<?php
		edit_post_link(
			esc_html__( 'Edit', TRANSLATED_TEXT_DOMAIN ),
			'<span class="edit__link">', '</span>'
		);
	?>
	<?php tha_entry_bottom(); ?>
</article>
<?php tha_entry_after(); ?>
