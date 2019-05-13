<?php


add_theme_support( 'post-thumbnails' );

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) { 

        wp_deregister_script('jquery');
        wp_register_script('jquery', ASSETS_URL . '/assets/js/jquery-3.3.1.min.js', array(), false, true);
        wp_register_script('bootstrap', ASSETS_URL . '/assets/js/bootstrap.min.js', array('jquery'), false, true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/style.css';

	if( $styles_path ) {
	
		wp_register_style('style-css', ASSETS_URL . '/assets/css/stylesheet.css', array(), false, 'all');
		wp_enqueue_style('style-css');
		// wp_register_style('font-awesome-all', ASSETS_URL . '/assets/css/fontawesome-all.css', array(), false, 'all');
		// wp_enqueue_style('font-awesome-all');
        wp_register_style('bootstrap-css', ASSETS_URL . '/assets/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap-css');
        wp_register_style('bootstrap3-css', ASSETS_URL . '/assets/css/bootstrap3.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap3-css');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

function my_acf_google_map_api( $api ) {
	$api['key'] = 'AIzaSyDDheZDjJxCxRC8_3nWe508y5w7aAZb-Ps';
	return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function post_type_features_init() {
    $labels = array(
        'name'                  => _x( 'Produktai', 'Post type general name', 'svetaine' ),
        'singular_name'         => _x( 'Feature', 'Post type singular name', 'svetaine' ),
        'menu_name'             => _x( 'Produktai', 'Admin Menu text', 'svetaine' ),
        'name_admin_bar'        => _x( 'Feature', 'Add New on Toolbar', 'svetaine' ),
        'add_new'               => __( 'Prideti naują produktą', 'svetaine' ),
        'add_new_item'          => __( 'Prideti naują produktą', 'svetaine' ),
        'new_item'              => __( 'Naujas produktas', 'svetaine' ),
        'edit_item'             => __( 'Redaguoti produktą', 'svetaine' ),
        'view_item'             => __( 'Žiūrėti produktus', 'svetaine' ),
        'all_items'             => __( 'Visi produktai', 'svetaine' ),
        'search_items'          => __( 'Ieškoti produktų', 'svetaine' ),
        'not_found'             => __( 'Produktų nera.', 'svetaine' ),
        'not_found_in_trash'    => __( 'Šiukšlinė tuščia.', 'svetaine' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'feature' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author'),
    );
 
    register_post_type( 'feature', $args );
}
 
add_action( 'init', 'post_type_features_init' );


function register_theme_menus() {
   
    register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ), 
        'footer-navigation' => __( 'Footer Navigation' ),
        'dropdown-elements' => __( 'Dropdown Elementai' ),
    ));
}

add_action( 'init', 'register_theme_menus' );



class CSS_Menu_Walker extends Walker {

    var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
    
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }
    
    function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    
        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        /* Add active class */
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
            unset($classes['current-menu-item']);
        }
        
        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'has-sub';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $value . $class_names .'>';
        
        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
        
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'><span>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</span></a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</li>\n";
    }
}

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '400');