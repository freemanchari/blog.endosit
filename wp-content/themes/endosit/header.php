<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html style="position: static;" dir="ltr" xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head profile="http://gmpg.org/xfn/11">

	
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen">
		
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<meta name="generator" content="<?php bloginfo('version'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo TEMPLATEPATH.'/pagenavi.css';?>" type="text/css" media="screen" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/sidebar_style.css"/>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui-personalized-1.5.2.packed.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/sidebar_tabs.js"></script>
		 <script type="text/javascript">
 var $jq = jQuery.noConflict();
function equalHeight(group) {
	var tallest = 0;
	group.each(function() {
		var thisHeight = $jq(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	group.height(tallest);
}

$jq(document).ready(function() {
	equalHeight($jq(".excerptlast"));
});
 </script>
</head>
<body <?php body_class(); ?>>
		<div id="top" class="snap_nopreview"> 
                   
				<div id="top_strip">
                                    <div class="logo_small"></div>
				<div id="top_strip_left"> 
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'secondary' ) ); ?>
				</div>
				<div id="top_strip_right">
					<ul>
						<li>	
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
		<div><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
			<input id="searchsubmit" value="Search" type="submit">
		</div>
	</form>
</li>
					</ul>
				</div>
			</div>
		</div>
			<div id="header" class="snap_nopreview" style="">
                           
			<?
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
				<div id="header_logo">
				    <? /* If a title has been provided, we'll use that. */
	if ($wpc_logo_url) { ?>
    
    	<a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><img width="224" height="74" src="<? echo stripslashes($wpc_logo_url); ?>" alt="Back to Home"></a>
        
    <? /* Otherwise we'll use a generic message. */
	} else { ?>
    
    	<a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/endosit.png'?>"></a>
        
    <? } ?>
				</div>

			</div>
			<div id="topmenu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => '' ) ); ?>
			</div>
					<div id="page">
			<div id="columns"><div id="content" class="narrowcolumn">

								