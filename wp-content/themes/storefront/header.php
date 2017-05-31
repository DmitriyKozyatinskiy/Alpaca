<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo '/nenazhera/wp-content/themes/kiruta/css/header.css' ?>">
<link rel="stylesheet" href="<?php echo '/nenazhera/wp-content/themes/kiruta/css/global.css' ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php
	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="col-full">
            <div class="header_wrapper clearfix">
                <div class="header_left">
                    <a href="#">
                        <img src="<?php echo '/nenazhera/wp-content/themes/kiruta/img/cat-dog.png' ?>" class="header_main_logo">
                    </a>
                </div>
                <div class="header_middle">
                    <a href="#">
                        <img src="<?php echo '/nenazhera/wp-content/themes/kiruta/img/title.png' ?>" class="header_title">
                    </a>
                    <h3>Доставка корму для песиків і котанів</h3>
                    <ul class="header_phone">
                        <li>
                            <a href="tel:+380631407887">+38 063 140 7887</a>
                        </li>
                        <li>
                            <a href="tel:+380684797447">+38 068 479 7447</a>
                        </li>
                    </ul>
                    <p class="header_workhours">Працюємо з 10 до 22<br>без вихідних</p>
                    <input type="search" placeholder="Знайти найкращий корм для улюбленця" id="header_search">
                </div>
                <div class="header_facebook">
                    <a href="https://www.facebook.com/nenazhera/">
                        <img src="<?php echo '/nenazhera/wp-content/themes/kiruta/img/bubble.png' ?>" class="facebook_bubble">
                        <span class="message_us">Напиши нам </span>
                    </a>
                    <a>
                        <img src="<?php echo '/nenazhera/wp-content/themes/kiruta/img/facebook_logo.png' ?>" class="facebook_transparent">
                    </a>
                </div>
            </div>
			<?php
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>

		</div>
	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
