<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dilletantish
 */

get_header(); ?>

	<div class="row">
		<div class="small-12 large-8 columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
				<br /><br />
			<?php endif; ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php dilletantish_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</div>
		<div class="small-12 large-4 columns">
			<div class="panel">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>