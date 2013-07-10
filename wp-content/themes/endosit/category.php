<?php get_header(); ?>
<div id="frontwrap">
<div id="contenttop">
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<div class="excerpt" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="excerpt_header snap_nopreview"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
								<div class="entry-meta entry-header">
								
						
						
						
					<span class="author vcard">By <strong><?php printf( '<a class="url fn" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( 'View all posts by %s', $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></strong></span>
<span class="published"><abbr class="published-time" title="<?php the_time( get_option('date_format') .' - '. get_option('time_format') ); ?>"><?php the_time( get_option('date_format') ); ?></abbr></span>
<span class="comment-count"><strong><a href="<?php comments_link(); ?>"><?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a></strong></span>
<a title="Post to Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="small-count" data-url="<?php echo get_permalink($postid); ?>"></a>
<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script>


					<!--END .entry-meta .entry-header-->
                    </div>
								
								<div class="entry">
									<div class="frontthumb">
										<?php flr_home_image()?>
									</div>
									
									<div class="frontcontent">
										<?php the_excerpt(); ?>
									</div>
								</div>
								<div class="excerpt_entry_footer snap_nopreview">
									
									<div class="freadmore">
										<a href="<?php the_permalink() ?>">Read more</a>
									</div>
									
								</div>
							</div>
								<?php endwhile; ?>
							    <?php else : ?>

	<?php endif; ?>		
	</div>
</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>