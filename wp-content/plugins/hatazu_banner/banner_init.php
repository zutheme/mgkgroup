<?php  defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); ?>
<?php
/* Plugin Name: hatazu banner
 * Plugin URI: http://hatazu.com
 * Description: banner.
 * Version: 1.0.0
 * Author: hatazu
 * Author URI: http://hatazu.com
 * License: GPL2
 */
add_action('admin_menu', 'banner_menu');
function banner_menu() {
    add_menu_page('banner Settings', 'banner', 'administrator', 'banner-settings', 'banner_menu_settings_page', 'dashicons-admin-generic');
}
function banner_menu_settings_page() {
    include('banner_admin.php');
}

function banner_menu_settings() {
    register_setting( 'banner-settings-group', 'option' );
    register_setting( 'banner-settings-group', 'images_banner1' );
    register_setting( 'banner-settings-group', 'link_images_banner1' );
    register_setting( 'banner-settings-group', 'images_banner2' );
    register_setting( 'banner-settings-group', 'link_images_banner2' );
}
add_action( 'admin_init', 'banner_menu_settings' );

//include('include/action.php');
//include('banner_box.php');
//add_action( 'wp_footer', 'banner_box');
//add_shortcode( 'form_reg', 'short_form_reg_widget' );
add_action("wp_enqueue_scripts", "hatazu_banner_menu_script");
function hatazu_images_banner_enqueue() {
    global $typenow;
        wp_enqueue_media();
        // Registers and enqueues the required javascript.
        wp_register_script( 'hatazu_images_banner', plugin_dir_url( __FILE__ ) . 'js/hatazu_images_banner.js', array(), '1.0.0', true );
        wp_localize_script( 'hatazu_images_banner', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),
                'button' => __( 'Use this image', 'prfx-textdomain' ),
            )
        );
        wp_enqueue_script( 'hatazu_images_banner' );
}
add_action( 'admin_enqueue_scripts', 'hatazu_images_banner_enqueue'); 
function hatazu_banner_menu_script() 
{
    //css
    wp_enqueue_style('hatazu_banner_style', plugin_dir_url(__FILE__) . 'css/hatazu_banner_style.css',array(), '1.0.0', 'all');
    //wp_enqueue_style('pouup_modal.css', plugin_dir_url(__FILE__).'css/banner_modal.css',array(), '1.1.2', 'all');
    //jquery
    //wp_enqueue_script('hatazu_banner_menu.js', plugin_dir_url(__FILE__) .'js/hatazu_banner_menu.js', array(), '1.0.0', true );
    //wp_enqueue_script( 'hatazu_image_banner', plugin_dir_url(__FILE__) .'js/hatazu_image_banner.js', array(), '1.0.0', true );
 } ?>