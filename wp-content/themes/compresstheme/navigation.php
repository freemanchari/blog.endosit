<?php
/**
 * Template: Navigation.php 
 *
 * @package WPFramework
 * @subpackage Template
 */

if ( is_singular() and !is_page() ) { ?>
<!--BEGIN .navigation-links-->
<div class="navigation-links single-page-navigation">
	<span class="nav-previous"><?php previous_post('&lsaquo; %', 'Previous Post', 'no', 'no'); ?></span>
	<span class="nav-next"><?php next_post('% &rsaquo;', 'Next Post', 'no', 'no'); ?></span>
<!--END .navigation-links-->
</div>
<?php } else { ?>
<!--BEGIN .navigation-links-->
<div class="navigation-links page-navigation">
	<span class="nav-next"><?php next_posts_link( '<span class="nav-meta">&laquo;</span> Older Entries' ); ?></span>
	<span class="nav-previous"><?php previous_posts_link( 'Newer Entries <span class="nav-meta">&raquo;</span>' ); ?></span>
<!--END .navigation-links-->
</div>
<?php } ?>