<?php

add_action( 'after_setup_theme', 'pf_setup' );
add_action('init', 'register_post_types');

if ( ! function_exists( 'pf_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pf_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pf, use a find and replace
		 * to change 'pf' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pf', get_template_directory() . '/languages' );

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

		register_nav_menu( 'header-menu', 'Меню в шапке' );

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

function register_post_types(){
	register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Portfolio', // основное название для типа записи
			'singular_name'      => 'Portfolio', // название для одной записи этого типа
			'add_new'            => 'Добавить слайд', // для добавления новой записи
			'add_new_item'       => 'Добавление слайд', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование слайд', // для редактирования типа записи
			'new_item'           => 'Новое слайд', // текст новой записи
			'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
			'search_items'       => 'Искать слайд', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Portfolio', // название меню
		),
		'description'         => '',
		'public'              => true,
		'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	) );
}


/**
 * Enqueue scripts and styles.
 */
function pf_scripts() {
	wp_enqueue_style( 'pf-style', get_stylesheet_uri() );
	wp_enqueue_style( 'pf-slick', get_template_directory_uri() . '/assets/css/slick/slick.css' );
	wp_enqueue_style( 'pf-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'pf-zero-grid', get_template_directory_uri() . '/assets/css/zerogrid.css' );
	wp_enqueue_style( 'pf-style-menu', get_template_directory_uri() . '/assets/css/menu.css' );
	wp_enqueue_style( 'pf-style-custom', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script('pf-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', [], null, true);
	wp_enqueue_script('pf-easey-scroll', get_template_directory_uri() . '/assets/js/jquery.easeScroll.js', ['jquery'], null, true);
	wp_enqueue_script('pf-slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js', ['jquery'], null, true);
	wp_enqueue_script('pf-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
}
add_action( 'wp_enqueue_scripts', 'pf_scripts' );



