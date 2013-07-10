<?php
header( "HTTP/1.1 404 Not found", true, 404 );
get_header();
?>
<div id="postp">
		<div id="frontwrap">

			<div id="contenttop">
				<!--BEGIN #post-0-->
				<div id="post-0" <?php post_class(); ?>>
					<h1 class="entry-title">Not Found</h1>

					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p>Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					<!--END .entry-content-->
					</div>
				<!--END #post-0-->
				</div>

			</div>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>