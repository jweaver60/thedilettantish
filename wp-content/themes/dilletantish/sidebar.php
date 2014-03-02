<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package dilletantish
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
    <div class="row">
      <div class="small-12 columns">
        <h3 class="sidebar-header">Welcome to The Dilettantish!</h3>
      </div>
    </div>
    <div class="row">
      <div class="small-12 large-6 columns">
        <img src="<?php the_field('about_me_image', 2); ?>" alt="About Me">
      </div>
      <div class="small-12 large-6 columns">
        <?php the_field('about_me_text', 2); ?>
      </div>
    </div>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'dilletantish' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'dilletantish' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
