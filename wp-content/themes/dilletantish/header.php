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
<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- start container -->
  <div class="container">

    <!-- header -->
    <div class="row">
      <div class="small-12 medium-8 columns">
        <header>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </header>
      </div>
      <div class="small-12 medium-4 columns">
        <ul class="social">
          <li><a href="http://www.pinterest.com/beegeeweave/" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a></li>
          <li><a href="http://www.twitter.com/beegeebeelane/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="http://www.facebook.com/bethany.lane.52" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
          <li><a href="http://www.instagram.com/beebeeweave" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
        </ul>
      </div>
    </div>

  	<!-- navigation -->
  	<nav class="top-bar" data-topbar>
  		<ul class="title-area">
  			<li class="name"></li>
  	    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  	  </ul>
  	  <section class="top-bar-section">
  	    <ul class="left">
  	      <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '%3$s', 'theme_location' => 'primary' ) ); ?>
  	    </ul>
  	  </section>
  	</nav>
