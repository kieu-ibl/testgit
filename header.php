<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="header">
		<div class="">
			<div class="row">
				<div id="logo" class="col-md-2 col-sm-2 col-xs-6">
					<div class="logo">
					<?php if(is_home()){ ?>
								<a href="#content"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/white.svg' ?>" alt=""></a>
						<?php }else{?>
							<a href="<?php echo get_home_url(); ?>">
								<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/white.svg' ?>" alt="">
							</a>
						<?php }?>
					</div>
				</div>
				<div id="navigation" class="col-md-10 col-sm-10 col-xs-6">
					<div class="menu">
						<?php if ( has_nav_menu( 'top' ) ) : ?>
							<?php wp_nav_menu( array(
								'theme_location' => 'top',
								'menu_id'        => 'menu_plu',
								'menu_class' => 'nav navbar-nav',
								'link_before' => '<span>',
								'link_after' => '</span>',
							) );
							?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="content" class="site-content">
