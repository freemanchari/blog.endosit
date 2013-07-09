		<div style="clear: both;"></div>
</div>
</div>
		<div id="footerwrap">
			<div id="footermain">
				<div id="footercontent">
					<div class="footerbox box1">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Left') ) : ?>

						<?php endif; ?>
					</div>
					<div class="footerbox box2">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Middle') ) : ?>

						<?php endif; ?>
					</div>
					<div class="footerbox box3">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Right') ) : ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		
	<div id="footercredits" class="snap_nopreview">
<div id="site-info">Copyright &copy;
<?php $the_year = date("Y"); echo $the_year; ?>

			
				<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			
All Rights Reserved.</div>
				<div id="footer_right">
					<ul>
						<li>Comppress theme by 
    <a href="http://www.comptalks.com/">CompTalks</a></li>			</ul>
				</div>
			</div>
	<?php wp_footer(); ?>
</body></html>