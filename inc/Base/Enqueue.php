<?php
/**
 * @package  XProCodeBoil
 */
namespace Inc\Base;


/**
 *
 */
class Enqueue
{

    public function register()
    {

        add_action('admin_enqueue_scripts', array($this, 'adminEnqueue'));
        add_action('wp_enqueue_scripts', array($this, 'publicEnqueue'));

    }

    /**
     * Register the JavaScript and css for the admin area.
     *
     */
    public function adminEnqueue()
    {

        // wp_register_style( 'ssbAdminStyle', get_theme_file_uri() . 'assets/css/admin-styles.min.css' );
        // wp_register_script( 'ssbAdminScript', get_theme_file_uri() . 'assets/js/admin-scripts.min.js' );

    }

    /**
     * Register the JavaScript and css for the public area.
     *
     */
    public function publicEnqueue()
    {
        //compiled file with all SCSS files together
        wp_register_style('boielrplate-css', get_stylesheet_directory_uri() . '/build/styles.css');
        wp_register_script('script-js', get_stylesheet_directory_uri() . '/build/script.js', ['jquery'], false);
        wp_enqueue_script('google-fonts-js', 'https://fonts.googleapis.com');
        wp_enqueue_style('boielrplate-css');
        wp_enqueue_script('scrolled', get_template_directory_uri() . '/build/script.js', false);

    }


}