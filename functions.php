<?php
/**
 * WpEducation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WpEducation
 */

if ( ! function_exists( 'wpeducation_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wpeducation_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WpEducation, use a find and replace
		 * to change 'wpeducation' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wpeducation', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wpeducation' ),
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
		add_theme_support( 'custom-background', apply_filters( 'wpeducation_custom_background_args', array(
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
add_action( 'after_setup_theme', 'wpeducation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpeducation_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wpeducation_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpeducation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wpeducation_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wpeducation' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wpeducation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpeducation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpeducation_scripts() {
	wp_enqueue_style( 'wpeducation-style', get_stylesheet_uri() );

	wp_enqueue_style( 'wpeducation-style1', get_template_directory_uri(). '/css/bootstrap.min.css' );

	wp_enqueue_style( 'wpeducation-style2', get_template_directory_uri(). '/css/jquery-ui.css' );

	wp_enqueue_style( 'wpeducation-style3', get_template_directory_uri(). '/css/owl.carousel.min.css' );

	wp_enqueue_style( 'wpeducation-style4', get_template_directory_uri(). '/css/owl.theme.default.min.css' );

	wp_enqueue_style( 'wpeducation-style5', get_template_directory_uri() . '/css/jquery.fancybox.min.css');

	wp_enqueue_style( 'wpeducation-style6', get_template_directory_uri(). '/css/bootstrap-datepicker.css' );

	wp_enqueue_style( 'wpeducation-style7', get_template_directory_uri(). '/css/fonts/flaticon/font/flaticon.css' );

	wp_enqueue_style( 'wpeducation-style8', get_template_directory_uri(). '/css/aos.css' );

	wp_enqueue_style( 'wpeducation-style9', get_template_directory_uri() . '/css/jquery.mb.YTPlayer.min.css');

	wp_enqueue_style( 'wpeducation-style10', get_template_directory_uri(). 'fonts/icomoon/style.css' );

	// wp_enqueue_style( 'wpeducation-style11', get_template_directory_uri(). '/css/' );



	wp_enqueue_script( 'wpeducation-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wpeducation-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'wpeducation-navigation1', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation2', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation3', get_template_directory_uri() . '/js/jquery-ui.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation4', get_template_directory_uri() . '/js/popper.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation5', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation6', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation7', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation8', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation9', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation10', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation11', get_template_directory_uri() . '/js/aos.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation12', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation13', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation14', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wpeducation-navigation15', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );



	 // <script src="js/jquery-3.3.1.min.js"></script>
  // <script src="js/jquery-migrate-3.0.1.min.js"></script>
  // <script src="js/jquery-ui.js"></script>
  // <script src="js/popper.min.js"></script>
  // <script src="js/bootstrap.min.js"></script>
  // <script src="js/owl.carousel.min.js"></script>
  // <script src="js/jquery.stellar.min.js"></script>
  // <script src="js/jquery.countdown.min.js"></script>
  // <script src="js/bootstrap-datepicker.min.js"></script>
  // <script src="js/jquery.easing.1.3.js"></script>
  // <script src="js/aos.js"></script>
  // <script src="js/jquery.fancybox.min.js"></script>
  // <script src="js/jquery.sticky.js"></script>
  // <script src="js/jquery.mb.YTPlayer.min.js"></script>




	//add files

  // <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  // <link rel="stylesheet" href="fonts/icomoon/style.css">

  // <link rel="stylesheet" href="css/jquery-ui.css">
  // <link rel="stylesheet" href="css/owl.carousel.min.css">
  // <link rel="stylesheet" href="css/owl.theme.default.min.css">
  // <link rel="stylesheet" href="css/owl.theme.default.min.css">

  // <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  // <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  // <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  // <link rel="stylesheet" href="css/aos.css">
  // <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  // <link rel="stylesheet" href="css/style.css">





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpeducation_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

