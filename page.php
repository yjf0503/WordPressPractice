<?php get_header();?>

	<div id="container">
		<?php if(have_posts()):  ?>
			<?php while(have_posts()): the_post(); ?>
				<div class="post" id="<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>">title="<?php the_title(); ?>"
							<div class="entry" >
								<?php the_content(); ?>
								<?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>
								<?php edit_post_link('Edit','<p>','</p>'); ?>
							</div>
						</a></h2>
				</div>
			<?php endwhile; ?>

		<?php else: ?>
			<div class="post" id="<?php the_ID(); ?>">
				<h2><?php _e('Not Found'); ?></h2>
			</div>
		<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>