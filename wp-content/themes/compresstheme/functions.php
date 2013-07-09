<?php
$themename = "Theme";
$shortname = "wpc";

$options = array (

	array(	"name" => "728 x 90 Ad spot",
			"type" => "title"),
			
	array(	"type" => "open"),
	
	array(	"name" => "Code:",
			"desc" => "Enter your ad code.",
			"id" => $shortname."_wide_ad",
			"std" => "",
			"type" => "textarea"),
			
	array(    "type" => "close"),
			
	array(	"name" => "125 x 125 Ad spots",
			"type" => "title"),
			
	array(    "type" => "open"),
			
	array(	"name" => "Ad #1 Image:",
			"desc" => "Enter your image url for Ad area #1.",
			"id" => $shortname."_short_ad1",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Ad #1 Url:",
			"desc" => "Enter your url for Ad area #1.",
			"id" => $shortname."_short_link1",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Ad #2 Image:",
			"desc" => "Enter your image url for Ad area #2.",
			"id" => $shortname."_short_ad2",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Ad #2 Url:",
			"desc" => "Enter your url for Ad area #2.",
			"id" => $shortname."_short_link2",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Ad #3 Image:",
			"desc" => "Enter your image url for Ad area #3.",
			"id" => $shortname."_short_ad3",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Ad #3 Url:",
			"desc" => "Enter your url for Ad area #3.",
			"id" => $shortname."_short_link3",
			"std" => "",
			"type" => "text"),
			
		array(	"name" => "Ad #4 Image:",
			"desc" => "Enter your image url for Ad area #4.",
			"id" => $shortname."_short_ad4",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "Ad #4 Url:",
			"desc" => "Enter your url for Ad area #4.",
			"id" => $shortname."_short_link4",
			"std" => "",
			"type" => "text"),
			
	array(	"type" => "close"),
			
	array(	"name" => "Feedburner",
			"type" => "title"),
			
	array(    "type" => "open"),
	
	array(	"name" => "ID:",
			"desc" => "Enter your Feedburner ID.",
			"id" => $shortname."_feed_burn",
			"std" => "",
			"type" => "text"),
			
	array(	"type" => "close"),
	
	array(	"name" => "Site Logo",
			"type" => "title"),
	
	array(    "type" => "open"),
	
	array(	"name" => "Image Url:",
			"desc" => "Enter your logo image url.",
			"id" => $shortname."_logo_url",
			"std" => "",
			"type" => "text"),
	
	array(	"type" => "close")
	
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table>
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
        
        
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		
		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		
		<?php break;
		
		case "title":
		?>
		
		<tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
		
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?>" /></td>
        </tr>

          
        <?php 		break;
	
 
} 
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}

add_action('admin_menu', 'mytheme_add_admin'); ?>
<?php


add_action( 'after_setup_theme', 'comppress_setup' );

if ( ! function_exists( 'comppress_setup' ) ):

function comppress_setup() {

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu' ),
			'secondary' => __( 'Secondary Menu' )
		)
	);
}

	// This theme allows users to set a custom background
	add_custom_background();

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to twentyten_header_image_width and twentyten_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'comppress_header_image_width', 1000 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'comppress_header_image_height', 130 ) );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See twentyten_admin_header_style(), below.
	add_custom_image_header( '', 'comppress_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'berries' => array(
			'url' => '%s/images/headers/berries.jpg',
			'thumbnail_url' => '%s/images/headers/berries-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Berries', 'twentyten' )
		),
		'cherryblossom' => array(
			'url' => '%s/images/headers/cherryblossoms.jpg',
			'thumbnail_url' => '%s/images/headers/cherryblossoms-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Cherry Blossoms', 'twentyten' )
		),
		'concave' => array(
			'url' => '%s/images/headers/concave.jpg',
			'thumbnail_url' => '%s/images/headers/concave-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Concave', 'twentyten' )
		),
		'fern' => array(
			'url' => '%s/images/headers/fern.jpg',
			'thumbnail_url' => '%s/images/headers/fern-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Fern', 'twentyten' )
		),
		'forestfloor' => array(
			'url' => '%s/images/headers/forestfloor.jpg',
			'thumbnail_url' => '%s/images/headers/forestfloor-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Forest Floor', 'twentyten' )
		),
		'inkwell' => array(
			'url' => '%s/images/headers/inkwell.jpg',
			'thumbnail_url' => '%s/images/headers/inkwell-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Inkwell', 'twentyten' )
		),
		'path' => array(
			'url' => '%s/images/headers/headerbg.jpg',
			'thumbnail_url' => '%s/images/headers/path-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Path', 'twentyten' )
		),
		'sunset' => array(
			'url' => '%s/images/headers/sunset.jpg',
			'thumbnail_url' => '%s/images/headers/sunset-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Sunset', 'twentyten' )
		)
	) );
}
endif;

if ( ! function_exists( 'comppress_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in twentyten_setup().
 *
 * @since Twenty Ten 1.0
 */
function comppress_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

/* Registering Ads */
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3><div class="widgetinner">',
    ));


}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'Footer Left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3><div class="widgetinner">',
    ));


}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'Footer Middle',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3><div class="widgetinner">',
    ));


}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'Footer Right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</div></div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3><div class="widgetinner">',
    ));


}

/* End Ads*/

if (function_exists('mdv_recent_comments')) { 
}else{
// Recent comments
	function mdv_recent_comments($no_comments = 10, $comment_lenth = 5, $before = '<li><p>', $after = '</p></li>', $show_pass_post = false, $comment_style = 0) {
	    global $wpdb;
	    $request = "SELECT ID, comment_ID, comment_content, comment_author, comment_author_url, post_title FROM $wpdb->comments LEFT JOIN $wpdb->posts ON $wpdb->posts.ID=$wpdb->comments.comment_post_ID WHERE post_status IN ('publish','static') ";
		if(!$show_pass_post) $request .= "AND post_password ='' ";
		$request .= "AND comment_approved = '1' ORDER BY comment_ID DESC LIMIT $no_comments";
		$comments = $wpdb->get_results($request);
	    $output = '';
		if ($comments) {
			foreach ($comments as $comment) {
				$comment_author = stripslashes($comment->comment_author);
				if ($comment_author == "")
					$comment_author = "anonymous"; 
				$comment_content = strip_tags($comment->comment_content);
				$comment_content = stripslashes($comment_content);
				$words=split(" ",$comment_content); 
				$comment_excerpt = join(" ",array_slice($words,0,$comment_lenth));
				$permalink = get_permalink($comment->ID)."#comment-".$comment->comment_ID;
	
				if ($comment_style == 1) {
					$post_title = stripslashes($comment->post_title);
					
					$url = $comment->comment_author_url;
	
					if (empty($url))
						$output .= $before . $comment_author . ' on ' . $post_title . '.' . $after;
					else
						$output .= $before . "<a href='$url' rel='nofollow'>$comment_author</a>" . ' on ' . $post_title . '.' . $after;
				}
				else {
					$output .= $before . '' . $comment_author . ':  <a href="' . $permalink;
					$output .= '" title="View the entire comment by ' . $comment_author.'">' . $comment_excerpt.'</a>' . $after;
				}
			}
			$output = convert_smilies($output);
		} else {
			$output .= $before . "None found" . $after;
		}
	    echo $output;
	}
}



// Recent posts
function mdv_recent_posts($no_posts = 5, $before = '<li><p>', $after = '</p></li>', $hide_pass_post = true, $skip_posts = 0, $show_excerpts = false) { 
    global $wpdb; 
        $time_difference = get_settings('gmt_offset'); 
        $now = gmdate("Y-m-d H:i:s",time()); 
    $request = "SELECT ID, post_title, post_excerpt FROM $wpdb->posts WHERE post_status = 'publish' "; 
        if($hide_pass_post) $request .= "AND post_password ='' "; 
        $request .= "AND post_date_gmt < '$now' ORDER BY post_date DESC LIMIT $skip_posts, $no_posts"; 
    $posts = $wpdb->get_results($request); 
        $output = ''; 
    if($posts) { 
                foreach ($posts as $post) { 
                        $post_title = substr(stripslashes($post->post_title), 0, 35);
                        $permalink = get_permalink($post->ID); 
                        $output .= $before . '<a href="' . $permalink . '" rel="bookmark" title="Permanent Link: ' . htmlspecialchars($post_title, ENT_COMPAT) . '">' . htmlspecialchars($post_title) . '</a>...'; 
                        if($show_excerpts) { 
                                $post_excerpt = stripslashes($post->post_excerpt); 
                                $output.= '<br />' . $post_excerpt; 
                        } 
                        $output .= $after; 
                } 
        } else { 
                $output .= $before . "None found" . $after; 
        } 
    echo $output; 
} 

// Most Commented
function most_commented($no_posts = 10, $before = '<li><p>', $after = '</p></li>', $show_pass_post = false) { 
    global $wpdb; 
        $request = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'comment_count' FROM $wpdb->posts, $wpdb->comments"; 
        $request .= " WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish'"; 
        if(!$show_pass_post) $request .= " AND post_password =''"; 
        $request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts"; 
    $posts = $wpdb->get_results($request); 
    $output = ''; 
        if ($posts) { 
                foreach ($posts as $post) { 
                        $post_title = stripslashes($post->post_title); 
                        $comment_count = $post->comment_count; 
                        $permalink = get_permalink($post->ID); 
                        $output .= $before . '<a href="' . $permalink . '" title="' . $post_title.'">' . $post_title . '</a> (' . $comment_count.')' . $after; 
                } 
        } else { 
                $output .= $before . "None found" . $after; 
        } 
    echo $output; 
} 

// Most Commented

function gravatar($rating = false, $size = false, $default = false, $border = false) {
	global $comment;
	$out = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($comment->comment_author_email);
	if($rating && $rating != '')
		$out .= "&amp;rating=".$rating;
	if($size && $size != '')
		$out .="&amp;size=".$size;
	if($default && $default != '')
		$out .= "&amp;default=".urlencode($default);
	if($border && $border != '')
		$out .= "&amp;border=".$border;
	echo $out;
}

function get_author($comment) {
	$author = "";

	if ( empty($comment->comment_author) )
		$author = __('Anonymous');
	else
		$author = $comment->comment_author;
		
	return $author;
}


function recent_comments($no_comments = 5, $comment_len = 30) { 
    global $wpdb; 
	
	$request = "SELECT * FROM $wpdb->comments";
	$request .= " JOIN $wpdb->posts ON ID = comment_post_ID";
	$request .= " WHERE comment_approved = '1' AND post_status = 'publish' AND post_password =''"; 
	$request .= " ORDER BY comment_date DESC LIMIT $no_comments"; 
		
	$comments = $wpdb->get_results($request);
		
	if ($comments) { 
		foreach ($comments as $comment) { 
			ob_start();
			?>
				<li>
					<a href="<?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID; ?>"><?php echo get_author($comment); ?>:</a>
					<?php echo strip_tags(substr(apply_filters('get_comment_text', $comment->comment_content), 0, $comment_len)); ?>
				</li>
			<?php
			ob_end_flush();
		} 
	} else { 
		echo "<li>No comments</li>";
	}
}

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'flr_home', 171, 171, true ); 
	add_image_size( 'flr_homelast', 76, 76, true );
	add_image_size( 'flr_sidethumb', 50, 50, true );
}

function flr_home_image(){

if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'flr_home', array('class' => 'postim') );
} else {?>
	<img class="postim" src="<?php bloginfo('template_directory'); ?>/images/defaultthumb.gif" alt=""  />
<?php
};

}

function flr_homelast_image(){

if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'flr_homelast', array('class' => 'postimlast') );
} else {?>
	<img class="postimlast" src="<?php bloginfo('template_directory'); ?>/images/defaultthumblast.gif" alt=""  />
<?php
};

}

function flr_sidethumb_image(){

if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'flr_sidethumb', array('class' => 'postimlast') );
} else {?>
	<img class="postimlast" src="<?php bloginfo('template_directory'); ?>/images/sidethumb.gif" alt=""  />
<?php
};

}

function new_excerpt_length($length) {
	return 75;
}
add_filter('excerpt_length', 'new_excerpt_length');


function my_post_limit($limit) {
	global $paged, $myOffset;
	if (empty($paged)) {
			$paged = 1;
	}
	$postperpage = 4;
	$pgstrt = ((intval($paged) -1) * $postperpage) + $myOffset . ', ';
	$limit = 'LIMIT '.$pgstrt.$postperpage;
	return $limit;
} //end function my_post_limit

/**
 * Prints HTML with meta information for the current post—date/time and author.
 */
function comppress_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
			get_the_author()
		)
	);
}

/** 
* A pagination function 
* @param integer $range: The range of the slider, works best with even numbers 
* Used WP functions: 
* get_pagenum_link($i) - creates the link, e.g. http://site.com/page/4 
* previous_posts_link(' &#171; '); - returns the Previous page link 
* next_posts_link(' &#187; '); - returns the Next page link 
*/  
function get_pagination($range = 8){  
  // $paged - number of the current page  
  global $paged, $wp_query;  
  // How much pages do we have?  
  if ( !$max_page ) {  
    $max_page = $wp_query->max_num_pages;  
  }  
  // We need the pagination only if there are more than 1 page  
  if($max_page > 1){  
    if(!$paged){  
      $paged = 1;  
    }  
    // On the first page, don't put the First page link  
    if($paged != 1){  
      echo '<a href="' . get_pagenum_link(1) . '"> First </a>';  
    }  
    // To the previous page  
    previous_posts_link(' &#171; ');  
    // We need the sliding effect only if there are more pages than is the sliding range  
    if($max_page > $range){  
      // When closer to the beginning  
      if($paged < $range){  
        for($i = 1; $i <= ($range + 1); $i++){  
          echo '<a href="' . get_pagenum_link($i) .' "';  
          if($i==$paged) echo 'class="current"';  
          echo ">$i</a>";  
        }  
      }  
      // When closer to the end  
      elseif($paged >= ($max_page - ceil(($range/2)))){  
        for($i = $max_page - $range; $i <= $max_page; $i++){  
          echo '<a href="' . get_pagenum_link($i) .' "';  
          if($i==$paged) echo 'class="current"';  
          echo ">$i</a>";  
        }  
      }  
      // Somewhere in the middle  
      elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){  
          echo '<a href="' . get_pagenum_link($i) .' "';  
          if($i==$paged) echo 'class="current"';  
          echo ">$i</a>";  
        }  
      }  
    }  
    // Less pages than the range, no sliding effect needed  
    else{  
      for($i = 1; $i <= $max_page; $i++){  
        echo '<a href="' . get_pagenum_link($i) .' "';  
        if($i==$paged) echo 'class="current"';  
        echo ">$i</a>";  
      }  
    }  
    // Next page  
    next_posts_link(' &#187; ');  
    // On the last page, don't put the Last page link  
    if($paged != $max_page){  
      echo '<a href="' . get_pagenum_link($max_page) . '"> Last </a>';  
    }  
  }  
}

// create clean pingbacks and trackbacks
function GetCleanPings($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; echo '<li>'.comment_author_link().'</li>';
}

$GLOBALS['content_width'] = 500;

function comppress_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='80'); ?>
		<div class="metawrap">
         <a href="<?php comment_author_url(); ?>"><cite class="fn"><?php comment_author(); ?></cite></a>

		 <span class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></span>
		</div>
	  </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>
	<div class="commenttxt">
      <?php comment_text() ?>
	</div>
      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
        }


?>
