<?php
/**
 * @package dilletantish
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail() ) { ?>
		<div class="row">
			<div class="small-12 medium-4 columns">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="small-12 medium-8 columns">
				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta">
							<?php dilletantish_posted_on(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
				<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<?php else : ?>
				<div class="entry-content">
					<?php the_content('Keep reading...'); ?>
				</div><!-- .entry-content -->
				<?php endif; ?>
			</div>
		</div>

				<footer class="entry-meta">
					<div class="row">
					<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
						<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'dilletantish' ) );
							if ( $categories_list && dilletantish_categorized_blog() ) :
						?>
						<div class="small-12 medium-3 columns">
							<span class="cat-links">
								<?php printf( __( '<i class=\'fa fa-folder custom-icon\'></i> %1$s', 'dilletantish' ), $categories_list ); ?>
							</span>
						</div>
						<?php endif; // End if categories ?>

						<?php
							/* translators: used between list items, there is a space after the comma */
							$tags_list = get_the_tag_list( '', __( ', ', 'dilletantish' ) );
							if ( $tags_list ) :
						?>
						<div class="small-12 medium-3 columns">
							<span class="tags-links">
								<?php printf( __( '<i class=\'fa fa-tag custom-icon\'></i> %1$s', 'dilletantish' ), $tags_list ); ?>
							</span>
						</div>
						<?php endif; // End if $tags_list ?>
					<?php endif; // End if 'post' == get_post_type() ?>

					<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
					<div class="small-12 medium-3 columns">
						<span class="comments-link"><i class="fa fa-comment custom-icon"></i> <?php comments_popup_link( __( 'Leave a comment', 'dilletantish' ), __( '1 Comment', 'dilletantish' ), __( '% Comments', 'dilletantish' ) ); ?></span>
					</div>
					<?php endif; ?>
					<div class="small-12 medium-3 columns">
						<?php edit_post_link( __( 'Edit', 'dilletantish' ), '<span class="edit-link"><i class="fa fa-edit custom-icon"></i> ', '</span>' ); ?>
					</div>
					</div>
				</footer><!-- .entry-meta -->
		<?php } else { ?>
		<div class="row">
			<div class="small-12 columns">
				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php dilletantish_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->
				<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<?php else : ?>
				<div class="entry-content">
					<?php the_content('Keep reading...'); ?>
				</div><!-- .entry-content -->
				<?php endif; ?>

				<footer class="entry-meta">
					<div class="row">
					<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
						<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'dilletantish' ) );
							if ( $categories_list && dilletantish_categorized_blog() ) :
						?>
						<div class="small-12 medium-3 columns">
							<span class="cat-links">
								<?php printf( __( '<i class=\'fa fa-folder custom-icon\'></i> %1$s', 'dilletantish' ), $categories_list ); ?>
							</span>
						</div>
						<?php endif; // End if categories ?>

						<?php
							/* translators: used between list items, there is a space after the comma */
							$tags_list = get_the_tag_list( '', __( ', ', 'dilletantish' ) );
							if ( $tags_list ) :
						?>
						<div class="small-12 medium-3 columns">
							<span class="tags-links">
								<?php printf( __( '<i class=\'fa fa-tag custom-icon\'></i> %1$s', 'dilletantish' ), $tags_list ); ?>
							</span>
						</div>
						<?php endif; // End if $tags_list ?>
					<?php endif; // End if 'post' == get_post_type() ?>

					<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
					<div class="small-12 medium-3 columns">
						<span class="comments-link"><i class="fa fa-comment custom-icon"></i> <?php comments_popup_link( __( 'Leave a comment', 'dilletantish' ), __( '1 Comment', 'dilletantish' ), __( '% Comments', 'dilletantish' ) ); ?></span>
					</div>
					<?php endif; ?>
					<div class="small-12 medium-3 columns">
						<?php edit_post_link( __( 'Edit', 'dilletantish' ), '<span class="edit-link"><i class="fa fa-edit custom-icon"></i> ', '</span>' ); ?>
					</div>
					</div>
				</footer><!-- .entry-meta -->
			</div>
		</div>
		<?php } ?>
	
</article><!-- #post-## -->
