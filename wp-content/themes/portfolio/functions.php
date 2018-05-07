<?php
// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

/*
 * wp_style_add_data( $handle, $key, $value );
 * Значения для $key и $value:
 * 'conditional' string      Comments for IE 6, lte IE 7 etc.
 * 'rtl'         bool|string To declare an RTL stylesheet.
 * 'suffix'      string      Optional suffix, used in combination with RTL.
 * 'alt'         bool        For rel="alternate stylesheet".
 * 'title'       string      For preferred/alternate stylesheets.
 */
function portfolio_scripts() {
	// colors
	wp_enqueue_style( 'portfolio-blue', get_template_directory_uri() . '/assets/css/colors/blue.css' );
	/*wp_style_add_data( 'portfolio-blue', 'alt', 'stylesheet' );    */
	wp_style_add_data( 'portfolio-blue', 'title', 'blue' );
	
	wp_enqueue_style( 'portfolio-green', get_template_directory_uri() . '/assets/css/colors/green.css' );
	wp_style_add_data( 'portfolio-green', 'alt', 'alternate stylesheet' );
	wp_style_add_data( 'portfolio-green', 'title', 'green' );
	
	wp_enqueue_style( 'portfolio-purple', get_template_directory_uri() . '/assets/css/colors/purple.css' );
	wp_style_add_data( 'portfolio-purple', 'alt', 'alternate stylesheet' );
	wp_style_add_data( 'portfolio-purple', 'title', 'purple' );
	
	wp_enqueue_style( 'portfolio-gold', get_template_directory_uri() . '/assets/css/colors/gold.css' );
	wp_style_add_data( 'portfolio-gold', 'alt', 'alternate stylesheet' );
	wp_style_add_data( 'portfolio-gold', 'title', 'gold' );
	
	wp_enqueue_style( 'portfolio-red', get_template_directory_uri() . '/assets/css/colors/red.css' );
	wp_style_add_data( 'portfolio-red', 'alt', 'alternate stylesheet' );
	wp_style_add_data( 'portfolio-red', 'title', 'red' );
	
	wp_enqueue_style( 'portfolio-pink', get_template_directory_uri() . '/assets/css/colors/pink.css' );
	wp_style_add_data( 'portfolio-pink', 'alt', 'alternate stylesheet' );
	wp_style_add_data( 'portfolio-pink', 'title', 'pink' );
	
	//styles
	wp_enqueue_style( 'portfolio-twitter', get_template_directory_uri() . '/assets/css/twitter.css' );
	wp_enqueue_style( 'portfolio-preloader', get_template_directory_uri() . '/assets/css/preloader.css' );
	wp_enqueue_style( 'portfolio-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'portfolio-animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'portfolio-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css' );
	wp_enqueue_style( 'portfolio-gmap', get_template_directory_uri() . '/assets/css/gmap.css' );
	wp_enqueue_style( 'portfolio-carousel-owl.carousel', get_template_directory_uri() . '/assets/css/carousel/owl.carousel.css' );
	wp_enqueue_style( 'portfolio-carousel-owl.theme', get_template_directory_uri() . '/assets/css/carousel/owl.theme.css' );
	wp_enqueue_style( 'portfolio-switcher.theme', get_template_directory_uri() . '/assets/css/switcher.css' );
	
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
	
	
	// подключаем js файл темы
	wp_enqueue_script( 'portfolio-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, true );
	wp_enqueue_script( 'portfolio-prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-switcher', get_template_directory_uri() . '/assets/js/switcher.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-vendor-fastclick.js', get_template_directory_uri() . '/assets/js/vendor/fastclick.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-jquery.validate.min', get_template_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-jquery.typer', get_template_directory_uri() . '/assets/js/vendor/jquery.typer.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-masonry.pkgd.min', get_template_directory_uri() . '/assets/js/vendor/masonry.pkgd.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-jquery.shuffle.min', get_template_directory_uri() . '/assets/js/vendor/jquery.shuffle.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-morphext.min', get_template_directory_uri() . '/assets/js/vendor/morphext.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-twitterFetcher.min', get_template_directory_uri() . '/assets/js/vendor/twitterFetcher.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-smoothScrolls', get_template_directory_uri() . '/assets/js/smoothScrolls.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [ 'portfolio-jquery' ], null, true );
	wp_enqueue_script( 'portfolio-twitter', get_template_directory_uri() . '/assets/js/twitter.js', [ 'portfolio-jquery' ], null, true );
	/*wp_enqueue_script( 'portfolio-gmap', get_template_directory_uri() .'/assets/js/gmap.js', ['portfolio-jquery'], null, true );*/
	/*wp_enqueue_script( 'portfolio-google-map', 'http://maps.google.com/maps/api/js?sensor=true/false', [], null, true );*/
	wp_enqueue_script( 'portfolio-main', get_template_directory_uri() . '/assets/js/main.js', [ 'portfolio-jquery' ], null, true );
	
	
}

/**
 * Настройки для темы
 */
add_action( 'after_setup_theme', 'portfolio_setup' );
function portfolio_setup() {
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
}


add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'my_reviews', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить Отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление Отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Отзыв', // для редактирования типа записи
			'new_item'           => 'Новый Отзывы', // текст новой записи
			'view_item'          => 'Смотреть Отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать Отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Отзывы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-quote',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
	) );
}

add_action( 'init', 'portfolio_post_types' );
function portfolio_post_types() {
	register_post_type( 'portfolio', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Работы в портфолио', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить работу', // для добавления новой записи
			'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование работы', // для редактирования типа записи
			'new_item'           => 'Новая работа в портфолио', // текст новой записи
			'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
			'search_items'       => 'Искать работу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Работы в портфолио', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'post_tag' ),
	) );
}

/*function show_tags() {
	$portfolio_posts = new WP_Query( [
		'post_type'      => 'portfolio',
		'posts_per_page' => - 1,
	] );
	
	$tags = [];
	
	foreach ($portfolio_posts->posts as $post) {
		$tags[] = wp_get_post_tags($post->ID)[0];
	}
	
	return $tags;
}*/
