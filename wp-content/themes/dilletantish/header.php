<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dilletantish
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Unica+One|Dawning+of+a+New+Day' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- navigation -->
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name"></li>
	    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
	  </ul>
	  <section class="top-bar-section">
	    <ul class="right">
	      <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '%3$s', 'theme_location' => 'primary' ) ); ?>
	    </ul>
	  </section>
	</nav>

	<!-- start container -->
	<div class="container">

		<!-- header -->
		<div class="row">
			<div class="small-12 columns">
				<header>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</header>
			</div>
		</div>
