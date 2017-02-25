<?php
/**
 * theme_skok functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme_skok
 */

if ( ! function_exists( 'theme_skok_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function theme_skok_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on theme_skok, use a find and replace
         * to change 'theme_skok' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'theme_skok', get_template_directory() . '/languages' );

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
            'menu-1' => esc_html__( 'Primary', 'theme_skok' ),
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
        add_theme_support( 'custom-background', apply_filters( 'theme_skok_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'theme_skok_setup' );

function widgets_search() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar-search', 'theme_skok' ),
        'id'            => 'search_box',
        'description'   => esc_html__( 'Add widgets here.', 'theme_skok' ),
        'before_widget' => '<div class="search_box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_search' );

function widgets_categories() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar-category', 'theme_skok' ),
        'id'            => 'blog-list',
        'description'   => esc_html__( 'Add widgets here.', 'theme_skok' ),
        'before_widget' => '<div class="blog-list">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_categories' );

function widgets_archive() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar-archive', 'theme_skok' ),
        'id'            => 'blog-archive',
        'description'   => esc_html__( 'Add widgets here.', 'theme_skok' ),
        'before_widget' => '<div class="blog-archive">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_archive' );

function widgets_popularpost() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar-popular-post', 'theme_skok' ),
        'id'            => 'popularpost',
        'description'   => esc_html__( 'Add widgets here.', 'theme_skok' ),
        'before_widget' => '<div class="popularpost">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_popularpost' );

function widgets_tags() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar-tags', 'theme_skok' ),
        'id'            => 'tags',
        'description'   => esc_html__( 'Add widgets here.', 'theme_skok' ),
        'before_widget' => '<div class="tags">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_tags' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_skok_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'theme_skok_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_skok_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_skok_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'theme_skok' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'theme_skok' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_skok_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_skok_scripts() {
    wp_enqueue_style( 'theme_skok-style', get_stylesheet_uri() );

    wp_enqueue_script( 'theme_skok-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'theme_skok-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_skok_scripts' );


function theme_customizer($wp_customize)
{

    $wp_customize->add_section('logo_section', array(
        'title' => __('Site logo', 'skokov_theme'),
        'priority' => 30,
        'description' => 'Upload a logo for this theme',
    ));

    $wp_customize->add_setting('logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(

        'label' => __('Current logo', 'skokov_theme'),
        'section' => 'logo_section',
        'settings' => 'logo',
    )));

}

add_action('customize_register', 'theme_customizer');

//Add social icons
function my_customizer_social_media_array()
{
    $social_sites = array('facebook', 'google-plus', 'twitter' , 'linkedin', 'youtube', 'dribbble',  'pinterest',  'flickr', 'tumblr', 'rss', 'instagram', 'email');
    return $social_sites;
}

add_action('customize_register', 'my_add_social_sites_customizer');

function my_add_social_sites_customizer($wp_customize)
{

    $wp_customize->add_section('my_social_settings', array(
        'title' => __('Social Media Icons', 'skokov_theme'),
        'priority' => 35,
    ));

    $social_sites = my_customizer_social_media_array();
    $priority = 5;

    foreach ($social_sites as $social_site) {

        $wp_customize->add_setting("$social_site", array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control($social_site, array(
            'label' => __("$social_site url:", 'skokov_theme'),
            'section' => 'my_social_settings',
            'type' => 'text',
            'priority' => $priority,
        ));

        $priority = $priority + 5;
    }
}

function my_social_media_icons()
{
    $social_sites = my_customizer_social_media_array();
    foreach ($social_sites as $social_site) {
        if (strlen(get_theme_mod($social_site)) > 0) {
            $active_sites[] = $social_site;
        }
    }
    if (!empty($active_sites)) {
        echo "<ul class='social-icons'>";
        foreach ($active_sites as $active_site) {
            $class = 'fa fa-' . $active_site;
            if ($active_site == 'email') {
                ?>
                <li>
                    <a class="email" target="_blank"
                       href="mailto:<?php echo antispambot(is_email(get_theme_mod($active_site))); ?>">
                        <span class="fa fa-envelope" title="<?php _e('email icon', 'skokov_theme'); ?>"></span>
                    </a>
                </li>
            <?php } else { ?>
                <li  class="<?php echo $active_site; ?>">
                    <a target="_blank"
                       href="<?php echo esc_url(get_theme_mod($active_site)); ?>">
                        <span class="<?php echo esc_attr($class); ?>"
                              title="<?php printf(__('%s icon', 'skokov_theme'), $active_site); ?>"></span>
                    </a>
                </li>
                <?php
            }
        }
        echo "</ul>";
    }
}
/*--------------------------------------------------------------------*/
/*Copyright*/
add_action('customize_register', function ($customizer) {
    $customizer->add_section(
        'edits-copyright',
        array(
            'title' => 'Copyright',
            'description' => 'Edit',
            'priority' => 35,
        )
    );
    $customizer->add_setting(
        'copyright_name',
        array('default' => 'FreeForWebDesign.com')
    );
    $customizer->add_control(
        'copyright_name',
        array(
            'label' => 'Copyright name',
            'section' => 'edits-copyright',
            'type' => 'text',
        )
    );
    $customizer->add_setting(
        'copyright_year',
        array('default' => '2016')
    );
    $customizer->add_control(
        'copyright_year',
        array(
            'label' => 'Year',
            'section' => 'edits-copyright',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'hide_copyright',
        array(
            'type' => 'checkbox',
            'label' => 'Hide text copyright',
            'section' => 'edit-copyright',
        )
    );
});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
