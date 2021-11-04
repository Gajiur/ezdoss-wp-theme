<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package wp_ezdoss_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if(!is_page_template( 'landscape-viewport.php' ) && !is_page_template( 'portrait-right-viewport.php' ) && !is_page_template( 'portrait-left-viewport.php' )): ?>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-ezdoss-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
		    <div class="col-sm-12 col-lg-12">
		    <div class="site-branding" style="text-align:center;">
    			<?php
    			the_custom_logo();
    			if ( is_front_page() && is_home() ) :
    				?>
    				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    				<?php
    			else :
    				?>
    				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    				<?php
    			endif;
    			$wp_ezdoss_theme_description = get_bloginfo( 'description', 'display' );
    			if ( $wp_ezdoss_theme_description || is_customize_preview() ) :
    				?>
    				<p class="site-description"><?php echo $wp_ezdoss_theme_description; ?></p>
    			<?php endif; ?>
    		</div><!-- .site-branding -->		    
    		</div>
		    
		    <div class="col-lg-12 col-sm-12">
                <nav class="navbar navbar-expand-md navbar-light bg-info">
                    <div class="container">
                        <!--<a class="navbar-brand" href="#">EZDOSS</a>-->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="main-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s justify-content-center">%3$s</ul>',
                                'depth' => 0,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                        </div>
                    </div>
                </nav>
		    </div>
		    

		</div>
		

		
	</header><!-- #masthead -->
<?php endif; ?>