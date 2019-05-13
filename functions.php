<?php 


function themeone_scritps(){
    wp_enqueue_style( 'default', get_stylesheet_uri() );

    wp_enqueue_style( 'themeone-theme', get_stylesheet_directory_uri().'/assets/css/theme.css' );
    wp_enqueue_style( 'themeone-grid', get_stylesheet_directory_uri().'/assets/css/grid.css' );
    wp_enqueue_style( 'themeone-elements', get_stylesheet_directory_uri().'/assets/css/elements.css' );
    wp_enqueue_style( 'themeone-utils', get_stylesheet_directory_uri().'/assets/css/utils.css' );
    wp_enqueue_script( 'themeone', get_stylesheet_directory_uri().'/assets/js/theme.js', array('jquery'), '1.0.0' );

    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.css' );

    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=devanagari' );
}
add_action( 'wp_enqueue_scripts', 'themeone_scritps' );


function themeone_setup(){
    /**************
     * Register Menus
     */
    register_nav_menu( 'primary', 'Primary Menu' );
    /**************
     * Theme Support for Featured Image
     */
    add_theme_support( 'post-thumbnails' );
    /**************
     * Theme Support for Custom Logo
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    /******************
     *  Theme support for html5
     */
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    /******************
     * Theme Support for Title Tag
     */
    add_theme_support( 'title-tag' );
    /*****************
     * Theme Support for selective refresh 
     */
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'themeone_setup' );

function themeone_widgets(){
    register_sidebar( array(
        'name'              => __('Blog Sidebar', 'theme-one' ),
        'id'                =>  'sidebar',
        'description'       =>  'Sidebar Widget Area',
        'class'             =>  'widget-area',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      =>  '<h2 class="widget-title">',
        'after_title'       =>  '</h2>'
    ) );
    register_sidebar( array(
        'name'              => __('Footer Widget Area', 'theme-one' ),
        'id'                =>  'footer-1',
        'description'       =>  'Footer Widget Area',
        'class'             =>  'widget-area',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      =>  '<h2 class="widget-title">',
        'after_title'       =>  '</h2>'
    ) );
    register_sidebar( array(
        'name'              => __('Footer Widget Area', 'theme-one' ),
        'id'                =>  'footer-2',
        'description'       =>  'Footer Widget Area',
        'class'             =>  'widget-area',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      =>  '<h2 class="widget-title">',
        'after_title'       =>  '</h2>'
    ) );
    register_sidebar( array(
        'name'              => __('Footer Widget Area', 'theme-one' ),
        'id'                =>  'footer-3',
        'description'       =>  'Footer Widget Area',
        'class'             =>  'widget-area',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      =>  '<h2 class="widget-title">',
        'after_title'       =>  '</h2>'
    ) );
    register_sidebar( array(
        'name'              => __('Footer Widget Area', 'theme-one' ),
        'id'                =>  'footer-4',
        'description'       =>  'Footer Widget Area',
        'class'             =>  'widget-area',
        'before_widget'     => '<div id="%1$s" class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      =>  '<h2 class="widget-title">',
        'after_title'       =>  '</h2>'
    ) );
}
add_action( 'widgets_init', 'themeone_widgets' );


/***************
 * The Excerpt Filter
 */
function custom_post_excerpt($content){
    $more = '....';
    $excerpt = wp_trim_words( $content, 20 , $more );
    return $excerpt;
}
add_filter( 'the_excerpt', 'custom_post_excerpt' );