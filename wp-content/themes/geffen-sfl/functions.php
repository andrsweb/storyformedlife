<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */



remove_action('shutdown', 'wp_ob_end_flush_all', 1);

include get_template_directory() . '/functions/gutenberg.php';
include get_template_directory() . '/functions/blocks.php';

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; ?>
	<li>
		<article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<header class="comment-author vcard">
				<?php echo get_avatar($comment, $size = '48', $default = '<path_to_url>'); ?>
				<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
				<time><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a></time>
				<?php edit_comment_link(__('(Edit)'), '  ', '') ?>
			</header>
			<?php if ($comment->comment_approved == '0'): ?>
				<em>
					<?php _e('Your comment is awaiting moderation.') ?>
				</em>
				<br />
			<?php endif; ?>

			<?php comment_text() ?>

			<nav>
				<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</nav>
		</article>
		<!-- </li> is added by wordpress automatically -->
		<?php
}

add_theme_support('post-thumbnails');
add_theme_support('menus');

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url') . "/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes = "")
{
	echo '<link rel="stylesheet" href="' . versioned_resource($relative_url) . '" ' . $add_attributes . '>' . "\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes = "")
{
	echo '<script src="' . versioned_resource($relative_url) . '" ' . $add_attributes . '></script>' . "\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url)
{
	$file = $_SERVER["DOCUMENT_ROOT"] . $relative_url;
	$file_version = "";

	if (file_exists($file)) {
		$file_version = "?v=" . filemtime($file);
	}

	return $relative_url . $file_version;
}


//
// Register Menus
//

if (!function_exists('mytheme_register_nav_menu')) {

	function mytheme_register_nav_menu()
	{
		register_nav_menus(
			array(
				'header' => __('Header', 'text_domain'),
				'footer' => __('Footer', 'text_domain'),
			)
		);
	}
	add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}




//
// Add Button Style
//


function my_mce_buttons_2($buttons)
{
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');


function my_mce_before_init_insert_formats($init_array)
{
	$style_formats = array(
		array(
			'title' => 'Button',
			'block' => 'a',
			'classes' => 'button',
			'wrapper' => true,
			'attributes' => ['href' => '#']
		),
		array(
			'title' => 'Button Dark',
			'block' => 'a',
			'classes' => 'button-dark',
			'wrapper' => true,
			'attributes' => ['href' => '#']
		),
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode($style_formats);
	return $init_array;
}
// Attach callback to 'tiny_mce_before_init' 
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');




if (function_exists('acf_set_options_page_title')) {
	acf_set_options_page_title('Global Content');
}



//
// Testimonials PT
//

/**
 * Register a custom post type called "Testimonial".
 *
 * @see get_post_type_labels() for label keys.
 */
function init_testimonials_pt()
{
	$labels = array(
		'name' => _x('Testimonials', 'Post type general name', 'textdomain'),
		'singular_name' => _x('Testimonial', 'Post type singular name', 'textdomain'),
		'menu_name' => _x('Testimonials', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Testimonial', 'Add New on Toolbar', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'add_new_item' => __('Add New Testimonial', 'textdomain'),
		'new_item' => __('New Testimonial', 'textdomain'),
		'edit_item' => __('Edit Testimonial', 'textdomain'),
		'view_item' => __('View Testimonial', 'textdomain'),
		'all_items' => __('All Testimonials', 'textdomain'),
		'search_items' => __('Search Testimonials', 'textdomain'),
		'parent_item_colon' => __('Parent Testimonials:', 'textdomain'),
		'not_found' => __('No Testimonials found.', 'textdomain'),
		'not_found_in_trash' => __('No Testimonials found in Trash.', 'textdomain'),
	);

	$args = array(
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'testimonials'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor'),
	);

	register_post_type('testimonial', $args);
}

add_action('init', 'init_testimonials_pt');


// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');



add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
	show_admin_bar(false);
}



register_taxonomy('testimonial_category', 'testimonial', array(
	'label' => __('Category', 'textdomain'),
	'rewrite' => false,
	'hierarchical' => true,
	'public' => false,
	// Set it to false, which will remove View link from backend and redirect user to homepage on clicking taxonomy link.
	'show_ui' => true,
	'show_admin_column' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
)
);


function vnmFunctionality_embedWrapper($html, $url, $attr, $post_id) {
    return '<div class="embedwrapper">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'vnmFunctionality_embedWrapper', 10, 4);

add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'updraft';
  return $exclude_filters;
});