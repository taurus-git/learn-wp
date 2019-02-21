<?php

/**custom logo**/
add_theme_support( 'custom-logo' );

add_filter( 'excerpt_length', function(){
	return 25;
} );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**custom logo**/

/**Navigation logo**/
function register_my_menu() {
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu' ),
        'topright-menu' => __( 'Top Right Menu' )
    ));
}
add_action( 'init', 'register_my_menu' );
class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}

/**Navigation logo**/

/**Footer Widget**/
function wpb_footerwidgets1_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'wpb' ),
        'id' => 'footer-widget-1',
        'description' => __( 'Footer widget Area First', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_footerwidgets1_init' );

function wpb_footerwidgets2_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'wpb' ),
        'id' => 'footer-widget-2',
        'description' => __( 'Footer widget Area Second', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_footerwidgets2_init' );

function wpb_footerwidgets3_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget 3', 'wpb' ),
        'id' => 'footer-widget-3',
        'description' => __( 'Footer widget Area Third', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_footerwidgets3_init' );

function wpb_footerwidgets4_init() {
    register_sidebar( array(
        'name' => __( 'Footer Widget 4', 'wpb' ),
        'id' => 'footer-widget-4',
        'description' => __( 'Footer widget Area Fourth', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_footerwidgets4_init' );

/**Footer Widget**/


function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Sidebar', 'Sidebar' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Sidebar', 'Sidebar' ),
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

add_action( 'wp_ajax_nopriv_emailsubscribe', 'emailsubscribe' );
add_action( 'wp_ajax_emailsubscribe', 'emailsubscribe' );
function emailsubscribe(){
$email=$_POST['email'];
$today = date("Y/m/d");
global $wpdb;
			$wpdb->insert(
				'newsletter',
				array(
					'email' => $email,
					'date'=>$today
				)
			);
$to     = 'askantech@gmail.com';
$subject= 'Email Subscribe Submitted';
$htmlContent .= '<html><body>';
$htmlContent .='<table style="width:60%;border:1px solid #eee;"border="1" bordercolor="#ac7ec0" cellpadding="6" cellspacing="0">';
$htmlContent .='<tr><th colspan="2" style="background-color:#7DA3B3;color: white;"><h2>Contact Form</h2></th></tr>';
$htmlContent .="<tr><td><b>E-mail </b></td><td>".$email."</td></tr>";
$htmlContent .= "</body></html>";

    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= 'From: askantech@gmail.com' . "\r\n";

    // Send email
    if(mail($to,$subject,$htmlContent,$headers)){
        $status = '0';
    }else{
        $status = 'err';
    }
    }

function rw_resize( $attachment_id, $width, $height, $crop = true )
    {
        // Get upload directory info
        $upload_info = wp_upload_dir();
        $upload_dir  = $upload_info['basedir'];
        $upload_url  = $upload_info['baseurl'];

        // Get file path info
        $path      = get_attached_file( $attachment_id );
        $path_info = pathinfo( $path );
        $ext       = $path_info['extension'];
        $rel_path  = str_replace( array( $upload_dir, ".$ext" ), '', $path );
        $suffix    = "{$width}x{$height}";
        $dest_path = "{$upload_dir}{$rel_path}-{$suffix}.{$ext}";
        $url       = "{$upload_url}{$rel_path}-{$suffix}.{$ext}";

        // If file exists: do nothing
        if ( file_exists( $dest_path ) )
            return $url;

        // Generate thumbnail
        if ( image_make_intermediate_size( $path, $width, $height, $crop ) )
            return $url;

        // Fallback to full size
        return "{$upload_url}{$rel_path}.{$ext}";
    }


add_filter( 'oembed_fetch_url', function( $provider, $url, $args )
{
    // Target publish.twitter.com provider
    if( 'publish.twitter.com' === parse_url( $provider, PHP_URL_HOST ) )
        $provider = add_query_arg( 'hide_media', 1, $provider );

    return $provider;
}, 99, 3 );
//related posts in wordress

function realtedpost()
{
global $post;
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
echo '<div class="related-div widget-sidebar"><div id="widget-title"><h3>Related Posts</h3>';
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 <ul>
        <li><span class="related-post-title"><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title()?>"><?php the_title()?></a></span>
</p><?php echo word_count(get_the_excerpt(), '30'); ?></p>
<ul class="blog-meta">
<li>By
<?php the_author_link(); ?>
</li>
<li><?php the_date(); ?></li>
<li><?php echo get_the_time(); ?> BST</li>
</ul>
        </li>
    </ul>
<?php }
echo '</div><a href="#" class="read-more-button">See More</a></div>';
wp_reset_postdata();
}
add_shortcode("realtedpost","realtedpost");

function word_count($string, $limit) {
$words = explode(' ', $string);
return implode(' ', array_slice($words, 0, $limit)) . " [...]";
}
add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));
function script_load_more($args = array()) {
    //initial posts load
        echo '<div id="ajax-content" class="content-area">';
            ajax_script_load_more($args);
        echo '</div>';
        echo '<div id="loadajax" style="padding-bottom: 30px;padding-top: 30px;text-align: center;width: 100%;"><a href="javascript:void(0);" style="background: #042a63;border-radius: 3px;color: white;display: inline-block;padding: 10px 30px;transition: all 0.25s ease-out;-webkit-font-smoothing: antialiased;" id="loadMore"  data-page="1" data-url="'.admin_url("admin-ajax.php").'" >Load More</a></div>';
}
add_shortcode('ajax_posts', 'script_load_more');

function ajax_script_load_more($args) {
    //init ajax
    $ajax = false;
    //check ajax call or not
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $ajax = true;
    }
    //number of posts per page default
    $num =10;
    //page number
    $paged = $_POST['page'] + 1;

/* 	foreach((get_the_category()) as $category)
	{
        print_r($category);
		//$categorysplit=str_split($category->slug);
		//print_r(explode("-",$category->slug));
		//echo $categorysplit;

     } */
	 if ( is_single() ) {
        $cats =  get_the_category();
        $cat = $cats[0];
    } else {
        $cat = get_category( get_query_var( 'cat' ) );
    }
    $cat_slug = $cat->slug;
	//print_r($cat_slug);
    //echo $cat_slug;
$args = array('post_type' => 'post','post_status' => 'publish','category_name' => $cat_slug,'posts_per_page' =>$num,'paged'=>$paged);
    //args
    //$args = array('post_type' => 'post','post_status' => 'publish','posts_per_page' =>$num,'paged'=>$paged);
    //query
    $query = new WP_Query($args);
    //check
    if ($query->have_posts()):
        //loop articales
        while ($query->have_posts()): $query->the_post();
            //include articles template
            include 'ajax-content.php';
        endwhile;
    else:
        echo 0;
    endif;
    //reset post data
    wp_reset_postdata();
    //check ajax call
    if($ajax) die();
}

add_action('wp_ajax_nopriv_ajax_script_load_more', 'ajax_script_load_more');
add_action('wp_ajax_ajax_script_load_more', 'ajax_script_load_more');


/*
 * enqueue js script
 */
add_action( 'wp_enqueue_scripts', 'ajax_enqueue_script' );
/*
 * enqueue js script call back
 */
function ajax_enqueue_script() {
    wp_enqueue_script( 'script_ajax', get_theme_file_uri( '/js/script_ajax.js' ), array( 'jquery' ), '1.0', true );
}
/*function rw_resize_url( $url, $width, $height, $crop = true )
{
    // Get upload directory info
    $upload_info = wp_upload_dir();
    $upload_dir  = $upload_info['basedir'];
    $upload_url  = $upload_info['baseurl'];
    // Get file path info
    $path= $url;
    $path_info = pathinfo( $path );
    $sub_dir = str_replace($upload_url,'',$path_info['dirname']).'/';
    $filename = $path_info['filename'];
    $ext       = $path_info['extension'];
    $rel_path  = str_replace( array( $upload_dir.$sub_dir, ".$ext" ), '', $path );
    $suffix    = "{$width}x{$height}";
    $dest_path = "{$upload_dir}{$sub_dir}{$filename}-{$suffix}.{$ext}";
    $url       = "{$rel_path}-{$suffix}.{$ext}";

    // If file exists: do nothing
    if ( file_exists( $dest_path ) )
        return $url;

    // Generate thumbnail
    if ( image_make_intermediate_size( $upload_dir.$sub_dir.$filename.'.'.$ext, $width, $height, $crop ) )
        return $url;
    // Fallback to full size
    return "{$upload_url}{$rel_path}.{$ext}";
}*/

/* Load Styles */
function load_styles()
{
    wp_enqueue_style('old-styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('font-styles', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('owl-styles', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-styles', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('new-styles', get_template_directory_uri() . '/css/style-new.css');
}

add_action('wp_enqueue_scripts', 'load_styles', 10);

function load_scripts()
{
    wp_enqueue_script( 'owl-carousel', get_theme_file_uri( '/js/owl.carousel.min.js' ), array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'custom-js', get_theme_file_uri( '/js/custom.js' ), array( 'jquery' ), '1.0', true );

}

add_action('wp_enqueue_scripts', 'load_scripts', 10);

function wpse_setup_theme() {
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'small-thumb', 60, 60, true );
}

add_action( 'after_setup_theme', 'wpse_setup_theme' );

add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes_sub', 10, 4 );

function change_menu_item_css_classes_sub( $classes, $item, $args, $depth ) { //add class 'active' to category in submenu
    if(is_category()){
            if ($item->ID === 4671) {
								$classes = [];
                $classes[] = 'menu-item menu-item-type-post_type menu-item-object-page menu-item-4671';
            }
        }
    return $classes;
}
add_filter( 'excerpt_length', function(){
    return 5;
} );
// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="">...</a class="moretag" href="">';
}
add_action('excerpt_more', 'new_excerpt_more', 99);