<?php
/**
 * MisfitDesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MisfitDesign
 */

if (!function_exists('misfitdesign_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function misfitdesign_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on MisfitDesign, use a find and replace
		 * to change 'misfitdesign' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('misfitdesign', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'Main Menu' => esc_html__('Primary', 'misfitdesign'),
		));
		register_nav_menus(array(
			'Footer Menu' => esc_html__('Secondary', 'misfitdesign'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('misfitdesign_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'misfitdesign_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function misfitdesign_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('misfitdesign_content_width', 640);
}
add_action('after_setup_theme', 'misfitdesign_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function misfitdesign_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Blog Sidebar', 'misfitdesign'),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__('Add widgets here.', 'misfitdesign'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Shop Sidebar', 'misfitdesign'),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__('Add widgets here.', 'misfitdesign'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Portfolio Sidebar', 'misfitdesign'),
		'id'            => 'sidebar-portfolio',
		'description'   => esc_html__('Add widgets here.', 'misfitdesign'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'misfitdesign_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function misfitdesign_scripts()
{
	// FONTS
	wp_enqueue_style('misfitdesign-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,900');
	// FONTAWESOME
	wp_enqueue_style('misfitdesign-fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');

	wp_enqueue_style('misfitdesign-style', get_stylesheet_uri());
	// jQUery
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), null, true);
	// wp_enqueue_script( 'misfitdesign-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// CUSTOM JS
	wp_enqueue_script('main-js', get_theme_file_uri('/js/custom.js'), NULL, '1.0', true);


	wp_enqueue_script('misfitdesign-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'misfitdesign_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Woocommerce hooks customization
 */

// Open image wrapper
add_action('woocommerce_before_shop_loop_item', 'misfit_shop_item_image_wrapper_open', 15);

function misfit_shop_item_image_wrapper_open()
{
	echo '<div class="shop-item-card__image">';
}

// Close image wrapper
add_action('woocommerce_before_shop_loop_item_title', 'misfit_shop_item_image_wrapper_close', 15);

function misfit_shop_item_image_wrapper_close()
{
	echo '</div>';
}

//Product title
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_title', 17);




// Open shop card overlay wrapper
add_action('woocommerce_before_shop_loop_item_title', 'misfit_shop_item_overlay_wrapper_open', 20);
function misfit_shop_item_overlay_wrapper_open()
{
	echo '<div class="shop-item-card__content">';
}

// Close shop card overlay wrapper
add_action('woocommerce_after_shop_loop_item', 'misfit_shop_item_overlay_wrapper_close', 5);

function misfit_shop_item_overlay_wrapper_close()
{
	echo '</div>';
}


// Move closing of the link after closing of the image wrapper
//First remove default position
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
//Now call it after image wrapper close
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 16);

//Remove default title position
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 20);

//Remove results count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
//Remove catalog ordering
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
//Remove rating stars
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
// Remove add to cart
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

// Remove meta from single product page (category)
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);



function is_portfolio()
{
	return (is_page() || is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type('project');
}
function is_blog()
{
	return (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

// Remove Contact Form 7 span tag around input fields
add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});
