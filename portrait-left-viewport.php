<?php
/**
 * Template Name: Ez Portrait Left
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
.rotating-canvas-right{
    transform: rotate(90deg);
    transform-origin:bottom left;
    
    position:absolute;
    top: -100vw;
    left: 0;
    
    height:100vw;
    width:100vh;
    
    overflow:auto;
}
.rotating-canvas-left{
    transform: rotate(-90deg);
    transform-origin:top left;
    
    position:absolute;
    top: 100vh;
    left: 0;
    
    height:100vw;
    width:100vh;
    
    overflow:auto;
}
</style>
	<main id="primary" class="site-main rotating-canvas-left">

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