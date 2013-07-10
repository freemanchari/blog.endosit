<?php
/*
Template Name: FullPage
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<div class="excerpt" id="post-<?php the_ID(); ?>" style="width:910px;">
								<div class="excerpt_header snap_nopreview"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
								<div class="excerpt_subheader snap_nopreview">
									<div class="excerpt_subheader_right"></div>									<div class="excerpt_subheader_left">
										By 
										<?php the_author() ?> 
																													</div>
								</div>
								<div class="entry" style="width:910px;">									<?php the_content('<p class="serif">Read More &raquo;</p>'); ?>

								 
</div>
							</div>
								<?php endwhile; ?>		<?php comments_template(); ?>  
		
							</div>
							 <?php else : ?>

							      <h2 class="center">Not Found</h2>
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>		



</div>
<?php get_footer(); ?>