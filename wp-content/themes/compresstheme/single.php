<?php get_header(); ?>
<div id="postp">
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<div class="excerpt" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="excerpt_header snap_nopreview"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
								<div class="excerpt_subheader snap_nopreview">
									<div class="excerpt_subheader_right"></div>									
									<div class="excerpt_subheader_left">
										<div class="entrywrap">
					<span class="author vcard">By <strong><?php printf( '<a class="url fn" href="' . get_author_posts_url( $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( 'View all posts by %s', $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></strong></span>

<span class="published"><abbr class="published-time" title="<?php the_time( get_option('date_format') .' - '. get_option('time_format') ); ?>"><?php the_time( get_option('date_format') ); ?></abbr></span>

<span class="comment-count"><strong><a href="<?php comments_link(); ?>"><?php comments_number( 'Leave a Comment', '1 Comment', '% Comments' ); ?></a></strong></span>
</div>
<div class="socialwrap">
<ul>
<li class="fbbtn scbtn">
						<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
</li>
<li class="bzzbtn scbtn">
<a title="Post to Google Buzz" class="google-buzz-button" href="http://www.google.com/buzz/post" data-button-style="small-count" data-url="<?php echo get_permalink($postid); ?>"></a>

<script type="text/javascript" src="http://www.google.com/buzz/api/button.js"></script>
</li>
<li class="tmemebtn scbtn">
<script type="text/javascript">

tweetmeme_url = '<?php echo get_permalink($postid); ?>';

tweetmeme_style = 'compact';

tweetmeme_source = 'theworldwinner';

</script>

<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
</li>
</ul>
</div>
									</div>
								</div>
								<div class="entry">									

								 <?php the_content( 'Read more &raquo;' ); ?>
</div>
<?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>
<div id="authorbox">
    <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '50' ); }?>
    <div class="authortext">
       <h4>About <?php the_author_posts_link(); ?></h4>
       <p><?php the_author_description(); ?></p>
    </div>
</div>
							</div>
							<?php include ( TEMPLATEPATH . '/navigation.php' ); ?>
								<?php comments_template(); ?>  
								<?php endwhile; ?>		
		
							 <?php else : ?>

							      <h2 class="center">Not Found</h2>
      <p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>		
	</div>
								</div>
<?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>