<?php
/*
Template Name: Acceuil
*/
?>
<?php get_header(); ?>


			<div class="content-news" <?php live_edit('news'); ?>>
				<?php query_posts( 'cat=7&showposts=2' );
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div>
					<a href="<?php the_permalink(); ?>">
						<p>
							<?php the_title(); ?>
						</p>
						<span>
							<?php the_field("date"); ?>
						</span>
					</a>
				</div>
				<?php endwhile; endif; ?>
			</div>

	    			
<?php get_footer(); ?>