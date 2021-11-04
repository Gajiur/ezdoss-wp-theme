<?php
/**
 * Template Name: Ez landscape
 * Template Post Type: post, page, signage
 */
get_header();
?>
<style>
.post, .page {
     margin: 0; 
}
.page-content, .entry-content, .entry-summary {
     margin: 0; 
}
</style>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-notitle', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				// comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
