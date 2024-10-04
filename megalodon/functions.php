<?php
/**
 * Megabelt functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Megabelt
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function megabelt_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Megabelt, use a find and replace
		* to change 'megabelt' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'megabelt', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Главное', 'megabelt' ),
			'menu-2' => esc_html__( 'Подвал', 'megabelt' ),
			'menu-3' => esc_html__( 'Мобильное меню', 'megabelt' ),
			'menu-4' => esc_html__( 'Комплектующие', 'megabelt' ),
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
			'megabelt_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'megabelt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function megabelt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'megabelt_content_width', 640 );
}
add_action( 'after_setup_theme', 'megabelt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function megabelt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'megabelt' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'megabelt' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'megabelt_widgets_init' );





/* Подключение JQuery */
wp_enqueue_script( 'jquery' );
  // для версий WP меньше 3.6 'jquery' нужно поменять на 'jquery-core'
  $wp_jquery_ver = $GLOBALS['wp_scripts']->registered['jquery']->ver;
  $jquery_ver = $wp_jquery_ver == '' ? '1.11.0' : $wp_jquery_ver;
  wp_deregister_script( 'jquery-core' );
  wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js' );
  wp_enqueue_script( 'jquery' );





add_action( 'wp_enqueue_scripts', 'stili_frontend', 25 );

function stili_frontend() {

	wp_enqueue_style( 'stili_1', get_stylesheet_directory_uri() . '/assets/css/reset.css' ); // Файл ресета стилей
	wp_enqueue_style( 'stili_2', get_stylesheet_directory_uri() . '/assets/css/main.css' ); // Главный файл со стилями для ГС
	wp_enqueue_style( 'stili_3', get_stylesheet_directory_uri() . '/assets/css/media.css' ); // Главный файл с адаптивом для ГС
	wp_enqueue_style( 'stili_4', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css' ); // Свайпер
	wp_enqueue_style( 'stili_5', get_stylesheet_directory_uri() . '/assets/css/jquery.fancybox.min.css' ); // Фенси бокс
	if( is_home() || is_front_page() ){ wp_enqueue_style( 'stili_6', get_stylesheet_directory_uri() . '/assets/css/header-main.css' ); }  // Хедер на ГС
	if( !is_home() && !is_front_page() ){ wp_enqueue_style( 'stili_7', get_stylesheet_directory_uri() . '/assets/css/header-alt.css' ); } // Хедер на остальных страницах
	if( is_page(10) ){ wp_enqueue_style( 'stili_8', get_stylesheet_directory_uri() . '/assets/css/contact.css' ); } // Для страницы контактов


	wp_enqueue_script( 'script_2', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js' ); // Свайпер
	wp_enqueue_script( 'script_3', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.min.js' ); // Фенси бокс
	wp_enqueue_script( 'script_4', get_stylesheet_directory_uri() . '/assets/js/jquery.maskedinput.min.js' ); // Маска
	wp_enqueue_script( 'script_1', get_stylesheet_directory_uri() . '/assets/js/main.js' ); // Главный JS для popup и тд
}

function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


























/**
 * Enqueue scripts and styles.
 */
function megabelt_scripts() {
	wp_enqueue_style( 'megabelt-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'megabelt-style', 'rtl', 'replace' );

	wp_enqueue_script( 'megabelt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'megabelt_scripts' );

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




add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'news', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить новую новость', // для добавления новой записи
			'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование новости', // для редактирования типа записи
			'new_item'           => 'Новая новость', // текст новой записи
			'view_item'          => 'Смотреть новость', // для просмотра записи этого типа.
			'search_items'       => 'Искать новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		],
		'description'            => 'Это новости!',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-feedback',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','excerpt','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'rewrite'             => true,
		'query_var'           => true,
		'has_archive'         => true,
	] );

	register_post_type( 'projects', [
		'label'  => null,
		'labels' => [
			'name'               => 'Проекты', // основное название для типа записи
			'singular_name'      => 'Проект', // название для одной записи этого типа
			'add_new'            => 'Добавить новый проект', // для добавления новой записи
			'add_new_item'       => 'Добавление пректа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
			'new_item'           => 'Новый проект', // текст новой записи
			'view_item'          => 'Смотреть проект', // для просмотра записи этого типа.
			'search_items'       => 'Искать проект', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Примеры работ', // название меню
		],
		'description'         => 'Это работы!',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-hammer',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','excerpt','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'rewrite'             => true,
		'query_var'           => true,
		'has_archive'         => true,
	] );


	register_post_type( 'components', [
		'label'  => null,
		'labels' => [
			'name'               => 'Комплектующие', // основное название для типа записи
			'singular_name'      => 'Комплектующее', // название для одной записи этого типа
			'add_new'            => 'Добавить новые комплектующие', // для добавления новой записи
			'add_new_item'       => 'Добавление комплектующего', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование комплектующего', // для редактирования типа записи
			'new_item'           => 'Новое комплектующее', // текст новой записи
			'view_item'          => 'Смотреть комплектующе', // для просмотра записи этого типа.
			'search_items'       => 'Искать комплектующее', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Комплектующие', // название меню
		],
		'description'            => 'Это комплектующие!',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-feedback',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','excerpt','thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'rewrite'             => true,
		'query_var'           => true,
		'has_archive'         => true,
	] );
 
	register_taxonomy( 'catalog-components', array( 'components' ), array(
		'label'        => '',
		'labels'       => array(
			'name'              => 'Категории Комплектующих',
			'singular_name'     => 'Категория Комплектующего',
			'search_items'      => 'Поиск категорий',
			'all_items'         => 'Все категории',
			'view_item '        => 'Просмотр категорий',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новое имя категории',
			'menu_name'         => 'Категории Комплектующих',
		),
		'hierarchical' => true,
		'public'       => true,
		'show_in_nav_menus'     => true,
	) );
}



/* Расширил редактор категорий в админке */
add_action('admin_head', 'my_custom_styles_for_cats');
function my_custom_styles_for_cats() {
  echo '<style>#edittag {max-width: 100%;}</style>';
}