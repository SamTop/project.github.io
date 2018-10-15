<?php
function project_setup() {

	load_theme_textdomain('project');

	add_theme_support('title-tag');

	add_theme_support('custom-logo', array(
		'height' => 52, 
		'width' => 163.77, 
		'flex-height' => true
	));

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(284.33, 400);

	add_theme_support('html5', array(
		'search_form', 
		'comment-form', 
		'comment-list', 
		'gallery', 
		'caption'
	));
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'gallery'
	));

	register_nav_menu('primary', 'Primary');
}

add_action('after_setup_theme', 'project_setup');

function project_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css' );
	wp_enqueue_style('audioplayer', get_template_directory_uri() . '/assets/css/audioplayer.css' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css' );
	wp_enqueue_style('all', get_template_directory_uri() . '/assets/css/all.css' );

	/*wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.slim.min.js' );*/
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');	
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js');
	wp_enqueue_script('audioplayer', get_template_directory_uri() . '/assets/js/audioplayer.js');
	wp_enqueue_script('aria-tabs', get_template_directory_uri() . '/assets/js/aria-tabs.js');
	wp_enqueue_script('description', get_template_directory_uri() . '/assets/js/description.js');
	wp_enqueue_script('parallux.min', get_template_directory_uri() . '/assets/js/jquery.parallux.min.js');
	wp_enqueue_script('parallux', get_template_directory_uri() . '/assets/js/parallux.js');
	






}
add_action( 'wp_enqueue_scripts', 'project_scripts' );

/*
*	Pagination
*/


function project_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( 'Previous', 'text-domain' ),
        'next_string'     => __( 'Next', 'text-domain' ),
        'before_output'   => '<nav"><ul class="pagination justify-content-center">',
        'after_output'    => '</ul></nav>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
   
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '"class="page-link" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="page-item active"><a class="page-link">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</a></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s" class="page-link">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '"class="page-link" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}

/*
*	Cusomization register
*/
function project_customize_register( $wp_customize ){
	$wp_customize->add_setting( 'foot' , array(
		'default'   => __('Hot tags', 'poject'),
		'transport' => 'refresh',
	));
	$wp_customize->add_setting( 'copy' , array(
		'default'   => __('Hot tags', 'poject'),
		'transport' => 'refresh',
	));
	$wp_customize->add_section( 'Text' , array(
		'title'   => __('Footer text', 'poject'),
		'priority' => 30,
	));
	$wp_customize->add_section( 'Copy' , array(
		'title'   => __('Copy text', 'poject'),
		'priority' => 30,
	));
	$wp_customize->add_control(
	'foot', 
	array(
		'label'    => __( 'Footer text', 'project' ),
		'section'  => 'Text',
		'settings' => 'foot',
		'type'     => 'text',
		
	)
	);
	$wp_customize->add_control(
	'copy', 
	array(
		'label'    => __( 'Copy text', 'project' ),
		'section'  => 'Copy',
		'settings' => 'copy',
		'type'     => 'textarea',
		
	)
	);
}
add_action( 'customize_register', 'project_customize_register');

function project_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'project' ) ,
		'id'            => 'sidebar-1',
		'descriptiion'  => __('Widgets will be shown', 'project' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="d-flex align-items-center justify-content-center category-text">
             <p class="text-light">',
		'after_title'   => '</p></div>',
	));
}
add_action( 'widgets_init', 'project_widgets_init' );






?>