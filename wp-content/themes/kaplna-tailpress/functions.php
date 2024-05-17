<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


function tailpress_get_news_endpoint() {
	register_rest_route(
		'wp/v2',
		'/news',
		array(
			'methods'  => 'GET',
			'callback' => 'tailpress_get_news',
		)
	);
}
add_action( 'rest_api_init', 'tailpress_get_news_endpoint' );

function tailpress_get_news() {
    $page = 1;
    if( isset($_GET["page"]) ){
        $page = $_GET["page"];
    }

    $args = array('category__not_in' => get_category_by_slug("oznamy")->term_id, 'posts_per_page' => 10, 'paged' => $page);
    $posts = get_posts( $args );
    $left = "";
    $right = "";
    $mobile = "";
    $i = 0;
    foreach ($posts as $post) {
        $title = get_the_title($post->ID);
        $excerpt = get_the_excerpt($post->ID);
        $permalink = get_the_permalink($post->ID);
        $border = rand(0, 1) ? "border-4" : "";
        $template = "<div class='card {$border} border-primary p-4'>
            <h3 class='text-text-gray text-2xl mb-4'>{$title}</h3>
            <p class='mb-4'>{$excerpt}</p>
            <a href='{$permalink}' class='bg-primary hover:bg-primary-hover px-3 py-1 rounded-full'>Čítaj ďalej</a>
        </div>";
        if ($i%2==0) {
            $left .= $template;
        } else {
            $right .= $template;
        }
        $mobile .= $template;
        $i++;
    }

    return json_encode(array("left" => $left, "right" => $right, "mobile" => $mobile, "isall" => false));
}
