<?php
/**
 * mgkgroup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mgkgroup
 */

if ( ! function_exists( 'mgkgroup_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mgkgroup_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mgkgroup, use a find and replace
		 * to change 'mgkgroup' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mgkgroup', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mgkgroup' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mgkgroup_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mgkgroup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mgkgroup_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mgkgroup_content_width', 640 );
}
add_action( 'after_setup_theme', 'mgkgroup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mgkgroup_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mgkgroup' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mgkgroup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mgkgroup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mgkgroup_scripts() {
	wp_enqueue_style( 'mgkgroup-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mgkgroup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mgkgroup-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mgkgroup_scripts' );

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
require get_template_directory() . '/inc/get_curent_cat.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
require_once ( dirname( __FILE__ ) . '/wp-bootstrap-navwalker.php') ;

//require_once ( dirname( __FILE__ ) . '/wpdocs_walker_nav_menu.php') ;
//require_once ( dirname( __FILE__ ) . '/wpdocs_walker_nav_lists.php') ;
//require_once ( dirname( __FILE__ ) . '/wpdocs_walker_nav_list.php') ;

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
	$title = single_tag_title( '', false );
    } elseif ( is_author() ) {
	$title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
 
    return $title;
});

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_content();
	 $cleanText = filter_var($excerpt, FILTER_SANITIZE_STRING);
    $introCleanText = strip_tags($cleanText);
	$charlength++;

	if ( mb_strlen( $introCleanText ) > $charlength ) {
		$subex = mb_substr( $introCleanText, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $introCleanText;
	}
}
function wpdocs_theme_name_scripts() {
	global $wp;
	$url = home_url(add_query_arg(array(),$wp->request));
	echo '<script>console.log('.$url.')</script>';
	if ( is_front_page() ) {
     	wp_enqueue_style( 'main_styles', get_template_directory_uri() . '/styles/main_styles.css', array(), '1.0.7', false);
     	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/styles/responsive.css', array(), '1.0.1', false );
     	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/plugins/slick-1.8.0/slick.js', array(), '1.0.1', true );
     	wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
     }elseif (is_single()) {
     	wp_enqueue_style( 'blog_single_styles', get_template_directory_uri() . '/styles/blog_single_styles.css', array(), '1.0.1', false);
     	wp_enqueue_style( 'blog_single_responsive', get_template_directory_uri() . '/styles/blog_single_responsive.css', array(), '1.0.0', false);
     	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/plugins/parallax-js-master/parallax.min.js', array(), '1.0.0', true );
     	wp_enqueue_script( 'blog_single_custom', get_template_directory_uri() . '/js/blog_single_custom.js', array(), '1.0.0', true );
     }elseif (is_page()&&!is_page_template( 'page-contact.php' )) {
     	wp_enqueue_style( 'blog_single_styles', get_template_directory_uri() . '/styles/blog_single_styles.css', array(), '1.0.1', false);
     	wp_enqueue_style( 'blog_single_responsive', get_template_directory_uri() . '/styles/blog_single_responsive.css', array(), '1.0.0', false);
     	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/plugins/parallax-js-master/parallax.min.js', array(), '1.0.0', true );
     	wp_enqueue_script( 'blog_single_custom', get_template_directory_uri() . '/js/blog_single_custom.js', array(), '1.0.0', true );
     }
     elseif (is_page_template( 'page-contact.php' ) ) {
     	wp_enqueue_style( 'contact_styles', get_template_directory_uri() . '/styles/contact_styles.css', array(), '1.0.2', false);
     	wp_enqueue_style( 'contact_responsive', get_template_directory_uri() . '/styles/contact_responsive.css', array(), '1.0.2', false );
     	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/plugins/slick-1.8.0/slick.js', array(), '1.0.0', true );
     } elseif (is_search()) {
     	
     	wp_enqueue_style( 'blog_styles', get_template_directory_uri() . '/styles/blog_styles.css', array(), '1.0.1', false);
     	wp_enqueue_style( 'blog_responsive', get_template_directory_uri() . '/styles/blog_responsive.css', array(), '1.0.1', false );
     	wp_enqueue_script( 'parallax.min.js', get_template_directory_uri() . '/plugins/parallax-js-master/parallax.min.js', array(), '1.0.1', true );
     	wp_enqueue_script( 'blog_custom.js', get_template_directory_uri() . '/js/blog_custom.js', array(), '1.0.1', true );
     }
     elseif (is_archive()) {
     	wp_enqueue_style( 'blog_styles', get_template_directory_uri() . '/styles/blog_styles.css', array(), '1.0.0', false);
     	wp_enqueue_style( 'blog_responsive', get_template_directory_uri() . '/styles/blog_responsive.css', array(), '1.0.0', false );
     	wp_enqueue_script( 'parallax.min.js', get_template_directory_uri() . '/plugins/parallax-js-master/parallax.min.js', array(), '1.0.0', true );
     	wp_enqueue_script( 'blog_custom.js', get_template_directory_uri() . '/js/blog_custom.js', array(), '1.0.0', true );
     }
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function get_page_title_for_slug($page_slug) {
     $page = get_page_by_path( $page_slug , OBJECT );
     if ( isset($page) )
        return $page->post_title;
     else
        return "Match not found";
}

?>