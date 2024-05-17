<?php
/**
 * codexlab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package codexlab
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function codexlab_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on codexlab, use a find and replace
     * to change 'codexlab' to the name of your theme in all the template files.
     */
    load_theme_textdomain('codexlab', get_template_directory() . '/languages');

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
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'codexlab'),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'codexlab_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'codexlab_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function codexlab_content_width()
{
    $GLOBALS['content_width'] = apply_filters('codexlab_content_width', 640);
}
add_action('after_setup_theme', 'codexlab_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codexlab_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'codexlab'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'codexlab'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'codexlab_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function codexlab_scripts()
{
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    // css files
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.6.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '5.15.4');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '7.4.0');
    wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/css/odometer.css', array(), '0.4.8');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.8.1');
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0');
    wp_enqueue_style('codexlab-font-awesome', get_template_directory_uri() . '/css/plugins/font-awesome.min.css', array(), _S_VERSION);


    // javascript files
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.6.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/js/jquery.odometer.min.js', array(), null, true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true);
    wp_enqueue_script('ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), null, true);
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/jquery.parallaxScroll.min.js', array(), null, true);
    wp_enqueue_script('tween-max', get_template_directory_uri() . '/assets/js/tween-max.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'codexlab_scripts');

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

function custom_portfolio_post_type()
{
    $labels = array(
        'name' => _x('Portfolio', 'post type general name', 'scalelabz.com'),
        'singular_name' => _x('Portfolio Item', 'post type singular name', 'scalelabz.com'),
        'menu_name' => _x('Portfolio', 'admin menu', 'scalelabz.com'),
        'name_admin_bar' => _x('Portfolio Item', 'add new on admin bar', 'scalelabz.com'),
        'add_new' => _x('Add New', 'portfolio item', 'scalelabz.com'),
        'add_new_item' => __('Add New Portfolio Item', 'scalelabz.com'),
        'new_item' => __('New Portfolio Item', 'scalelabz.com'),
        'edit_item' => __('Edit Portfolio Item', 'scalelabz.com'),
        'view_item' => __('View Portfolio Item', 'scalelabz.com'),
        'all_items' => __('All Portfolio Items', 'scalelabz.com'),
        'search_items' => __('Search Portfolio Items', 'scalelabz.com'),
        'parent_item_colon' => __('Parent Portfolio Items:', 'scalelabz.com'),
        'not_found' => __('No portfolio items found.', 'scalelabz.com'),
        'not_found_in_trash' => __('No portfolio items found in Trash.', 'scalelabz.com')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies' => array('portfolio_category') // Add custom taxonomy here
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'custom_portfolio_post_type');

// Add custom taxonomy for portfolio items
function custom_portfolio_taxonomy()
{
    $labels = array(
        'name' => _x('Portfolio Categories', 'taxonomy general name', 'scalelabz.com'),
        'singular_name' => _x('Portfolio Category', 'taxonomy singular name', 'scalelabz.com'),
        'search_items' => __('Search Portfolio Categories', 'scalelabz.com'),
        'all_items' => __('All Portfolio Categories', 'scalelabz.com'),
        'parent_item' => __('Parent Portfolio Category', 'scalelabz.com'),
        'parent_item_colon' => __('Parent Portfolio Category:', 'scalelabz.com'),
        'edit_item' => __('Edit Portfolio Category', 'scalelabz.com'),
        'update_item' => __('Update Portfolio Category', 'scalelabz.com'),
        'add_new_item' => __('Add New Portfolio Category', 'scalelabz.com'),
        'new_item_name' => __('New Portfolio Category Name', 'scalelabz.com'),
        'menu_name' => __('Portfolio Categories', 'scalelabz.com'),
    );

    $args = array(
        'hierarchical' => true, // Set to true for category-like behavior
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-category'),
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'custom_portfolio_taxonomy');


// Add custom section and settings to the Customizer
function custom_theme_settings($wp_customize)
{
    // Create a new section for settings
    $wp_customize->add_section(
        'custom_settings',
        array(
            'title' => __('Settings', 'your-scalelabz.com'),
            'priority' => 30, // Adjust as needed
        )
    );

    // Add phone number setting
    $wp_customize->add_setting(
        'phone_number',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field', // Sanitization function
        )
    );

    // Add control for phone number setting
    $wp_customize->add_control(
        'phone_number',
        array(
            'label' => __('Phone Number', 'your-scalelabz.com'),
            'section' => 'custom_settings',
            'type' => 'text',
        )
    );

    // Add social links setting
    $wp_customize->add_setting(
        'social_instagram',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw', // Sanitization function
        )
    );
    $wp_customize->add_setting(
        'social_facebook',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw', // Sanitization function
        )
    );
    $wp_customize->add_setting(
        'social_youtube',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw', // Sanitization function
        )
    );
    $wp_customize->add_setting(
        'social_linkedin',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw', // Sanitization function
        )
    );

    // Add control for Instagram
    $wp_customize->add_control(
        'social_instagram',
        array(
            'label' => __('Instagram', 'your-scalelabz.com'),
            'section' => 'custom_settings',
            'type' => 'url',
        )
    );
    // Add control for Facebook
    $wp_customize->add_control(
        'social_facebook',
        array(
            'label' => __('Facebook', 'your-scalelabz.com'),
            'section' => 'custom_settings',
            'type' => 'url',
        )
    );
    // Add control for YouTube
    $wp_customize->add_control(
        'social_youtube',
        array(
            'label' => __('YouTube', 'your-scalelabz.com'),
            'section' => 'custom_settings',
            'type' => 'url',
        )
    );
    // Add control for LinkedIn
    $wp_customize->add_control(
        'social_linkedin',
        array(
            'label' => __('LinkedIn', 'your-scalelabz.com'),
            'section' => 'custom_settings',
            'type' => 'url',
        )
    );

    // Add address setting
    $wp_customize->add_setting(
        'address',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field', // Sanitization function
        )
    );

    // Add control for address setting
    $wp_customize->add_control(
        'address',
        array(
            'label' => __('Address', 'your-scalelabz.com'),
            'section' => 'custom_settings',
            'type' => 'text',
        )
    );

}
add_action('customize_register', 'custom_theme_settings');

// patners custom post type
function register_partner_post_type()
{
    $labels = array(
        'name' => __('Partners', 'scalelabz.com'),
        'singular_name' => __('Partner', 'scalelabz.com'),
        'menu_name' => __('Partners', 'scalelabz.com'),
        'name_admin_bar' => __('Partner', 'scalelabz.com'),
        'add_new' => __('Add New', 'scalelabz.com'),
        'add_new_item' => __('Add New Partner', 'scalelabz.com'),
        'new_item' => __('New Partner', 'scalelabz.com'),
        'edit_item' => __('Edit Partner', 'scalelabz.com'),
        'view_item' => __('View Partner', 'scalelabz.com'),
        'all_items' => __('All Partners', 'scalelabz.com'),
        'search_items' => __('Search Partners', 'scalelabz.com'),
        'parent_item_colon' => __('Parent Partners:', 'scalelabz.com'),
        'not_found' => __('No partners found.', 'scalelabz.com'),
        'not_found_in_trash' => __('No partners found in Trash.', 'scalelabz.com')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'scalelabz.com'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'partner'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail'), // Adjust as needed
        'menu_icon' => 'dashicons-businessman', // Adjust as needed
    );

    register_post_type('partner', $args);
}
add_action('init', 'register_partner_post_type');

// reviews custom post type
function create_testimonial_cpt()
{
    $labels = array(
        'name' => _x('Testimonials', 'Post Type General Name', 'scalelabz.com'),
        'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'scalelabz.com'),
        'menu_name' => __('Testimonials', 'scalelabz.com'),
        'name_admin_bar' => __('Testimonial', 'scalelabz.com'),
        'archives' => __('Testimonial Archives', 'scalelabz.com'),
        'attributes' => __('Testimonial Attributes', 'scalelabz.com'),
        'parent_item_colon' => __('Parent Testimonial:', 'scalelabz.com'),
        'all_items' => __('All Testimonials', 'scalelabz.com'),
        'add_new_item' => __('Add New Testimonial', 'scalelabz.com'),
        'add_new' => __('Add New', 'scalelabz.com'),
        'new_item' => __('New Testimonial', 'scalelabz.com'),
        'edit_item' => __('Edit Testimonial', 'scalelabz.com'),
        'update_item' => __('Update Testimonial', 'scalelabz.com'),
        'view_item' => __('View Testimonial', 'scalelabz.com'),
        'view_items' => __('View Testimonials', 'scalelabz.com'),
        'search_items' => __('Search Testimonial', 'scalelabz.com'),
        'not_found' => __('Not found', 'scalelabz.com'),
        'not_found_in_trash' => __('Not found in Trash', 'scalelabz.com'),
        'featured_image' => __('Featured Image', 'scalelabz.com'),
        'set_featured_image' => __('Set featured image', 'scalelabz.com'),
        'remove_featured_image' => __('Remove featured image', 'scalelabz.com'),
        'use_featured_image' => __('Use as featured image', 'scalelabz.com'),
        'insert_into_item' => __('Insert into Testimonial', 'scalelabz.com'),
        'uploaded_to_this_item' => __('Uploaded to this Testimonial', 'scalelabz.com'),
        'items_list' => __('Testimonials list', 'scalelabz.com'),
        'items_list_navigation' => __('Testimonials list navigation', 'scalelabz.com'),
        'filter_items_list' => __('Filter Testimonials list', 'scalelabz.com'),
    );
    $args = array(
        'label' => __('Testimonial', 'scalelabz.com'),
        'description' => __('Post Type Description', 'scalelabz.com'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'create_testimonial_cpt', 0);

// team members custom post types
function register_team_member_post_type()
{
    $labels = array(
        'name' => __('Team Members', 'scalelabz.com'),
        'singular_name' => __('Team Member', 'scalelabz.com'),
        'menu_name' => __('Team Members', 'scalelabz.com'),
        'name_admin_bar' => __('Team Member', 'scalelabz.com'),
        'add_new' => __('Add New', 'scalelabz.com'),
        'add_new_item' => __('Add New Team Member', 'scalelabz.com'),
        'new_item' => __('New Team Member', 'scalelabz.com'),
        'edit_item' => __('Edit Team Member', 'scalelabz.com'),
        'view_item' => __('View Team Member', 'scalelabz.com'),
        'all_items' => __('All Team Members', 'scalelabz.com'),
        'search_items' => __('Search Team Members', 'scalelabz.com'),
        'parent_item_colon' => __('Parent Team Members:', 'scalelabz.com'),
        'not_found' => __('No team members found.', 'scalelabz.com'),
        'not_found_in_trash' => __('No team members found in Trash.', 'scalelabz.com')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'scalelabz.com'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'team-member'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'), // Adjust as needed
        'menu_icon' => 'dashicons-groups', // Adjust as needed
    );

    register_post_type('team_member', $args);
}
add_action('init', 'register_team_member_post_type');


function custom_login_logo()
{
    ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(https://scalelabz.com/wp-content/uploads/2024/04/bg-logo.png);
            width: 300px;
            /* Set the width of your logo */
            height: 80px;
            /* Set the height of your logo */
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 30px;
            /* Adjust the padding to center the logo vertically */
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_login_logo');


function create_portfolio_cpt() {
    $labels = array(
        'name' => _x('Portfolios', 'Post Type General Name', 'scalelabz.com'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'scalelabz.com'),
        'menu_name' => __('Portfolios', 'scalelabz.com'),
        'name_admin_bar' => __('Portfolio', 'scalelabz.com'),
        'archives' => __('Portfolio Archives', 'scalelabz.com'),
        'attributes' => __('Portfolio Attributes', 'scalelabz.com'),
        'parent_item_colon' => __('Parent Portfolio:', 'scalelabz.com'),
        'all_items' => __('All Portfolios', 'scalelabz.com'),
        'add_new_item' => __('Add New Portfolio', 'scalelabz.com'),
        'add_new' => __('Add New', 'scalelabz.com'),
        'new_item' => __('New Portfolio', 'scalelabz.com'),
        'edit_item' => __('Edit Portfolio', 'scalelabz.com'),
        'update_item' => __('Update Portfolio', 'scalelabz.com'),
        'view_item' => __('View Portfolio', 'scalelabz.com'),
        'view_items' => __('View Portfolios', 'scalelabz.com'),
        'search_items' => __('Search Portfolio', 'scalelabz.com'),
        'not_found' => __('Not found', 'scalelabz.com'),
        'not_found_in_trash' => __('Not found in Trash', 'scalelabz.com'),
        'featured_image' => __('Featured Image', 'scalelabz.com'),
        'set_featured_image' => __('Set featured image', 'scalelabz.com'),
        'remove_featured_image' => __('Remove featured image', 'scalelabz.com'),
        'use_featured_image' => __('Use as featured image', 'scalelabz.com'),
        'insert_into_item' => __('Insert into portfolio', 'scalelabz.com'),
        'uploaded_to_this_item' => __('Uploaded to this portfolio', 'scalelabz.com'),
        'items_list' => __('Portfolios list', 'scalelabz.com'),
        'items_list_navigation' => __('Portfolios list navigation', 'scalelabz.com'),
        'filter_items_list' => __('Filter portfolios list', 'scalelabz.com'),
    );
    $args = array(
        'label' => __('Portfolio', 'scalelabz.com'),
        'description' => __('Post Type Description', 'scalelabz.com'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_cpt', 0);


function add_portfolio_metaboxes() {
    add_meta_box(
        'portfolio_video_url',
        __('Portfolio Video URL', 'scalelabz.com'),
        'portfolio_video_url_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_portfolio_metaboxes');

function portfolio_video_url_callback($post) {
    wp_nonce_field(basename(__FILE__), 'portfolio_video_nonce');
    $portfolio_video_url = get_post_meta($post->ID, 'portfolio_video_url', true);
    echo '<label for="portfolio_video_url">' . __('Video URL', 'scalelabz.com') . '</label>';
    echo '<input type="text" name="portfolio_video_url" value="' . esc_attr($portfolio_video_url) . '" size="50">';
}

function save_portfolio_video_url($post_id) {
    if (!isset($_POST['portfolio_video_nonce']) || !wp_verify_nonce($_POST['portfolio_video_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    $portfolio_video_url = sanitize_text_field($_POST['portfolio_video_url']);
    update_post_meta($post_id, 'portfolio_video_url', $portfolio_video_url);
}
add_action('save_post', 'save_portfolio_video_url');
