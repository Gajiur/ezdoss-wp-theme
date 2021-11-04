<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package wp_ezdoss_theme
 */

?>
<?php if(!is_page_template( 'landscape-viewport.php' ) && !is_page_template( 'portrait-right-viewport.php' ) && !is_page_template( 'portrait-left-viewport.php' )): ?>
	<footer id="colophon" class="site-footer mt-5 p-4 bg-info text-white text-center">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://ezdoss.com/', 'wp-ezdoss-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( ' Copyright &copy; %1$s  %2$s', 'wp-ezdoss-theme' ), date('Y') , bloginfo('name'));
				?>
			</a>
			<!--<span class="sep"> | </span>-->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'wp-ezdoss-theme' ), 'wp-ezdoss-theme', '<a href="http://widgethub.us">Ezdoss Team</a>' );
				?>
		</div><!-- .site-info -->
		<div class="powered-by">
				<?php
				printf(
					esc_html__( 'Proudly powered by %s.', 'wp-ezdoss-theme' ),
					'<a href="' . esc_url( __( 'http://widgethub.us', 'wp-ezdoss-theme' ) ) . '">Ezdoss Team</a>'
				);
				?>
			</div><!-- .powered-by -->
	</footer><!-- #colophon -->
<?php endif; ?>	
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
