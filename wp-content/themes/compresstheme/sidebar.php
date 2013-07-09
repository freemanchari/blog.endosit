<div id="sidebar">
	<?php include ('sidebar_tabs.php') ?>

		<?php include ('shortads.php') ?>
		
		<div class="widget feedsub">
			<h3 class="widget-title">Subscribe</h3>
			<div class="widgetinner">
			<?php 
				$feedb = get_option('wpc_feed_burn'); 
			?>
			<form style="text-align:center;background-color: #EFEFEF;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<? echo stripslashes($feedb); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<span>Enter your email address:</span>
		    <input type="text" style="width:140px" name="email"/>
			<input type="hidden" value="<? echo stripslashes($feedb); ?>" name="uri"/>
			<input type="hidden" name="loc" value="en_US"/>
			<input class="feedbtn" type="submit" value="Subscribe" /></form>
			
			</div>
		</div>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

    <?php endif; ?>
</div>					