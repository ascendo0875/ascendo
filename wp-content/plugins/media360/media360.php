<?php
/** 
 * Plugin Name: 360 Media
 * Description: a simple demo for the 360 Media Job Inteview
 * Author: Nick
 * Author URI: https://ascendosolutions.com
 * Version: 1.0.0
 * Text Domain: 360media
 */

class media360 {

    public function __construct() {

        add_action('init', array($this, 'create_custom_post_type'));
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));
        add_shortcode('media360', array($this, 'load_shortcode'));
    }


    public function create_custom_post_type() {
        
        $args = array(
            'public' => false,
            'supports' => array('title'=>'media360'), 
            'description' => 'hahaha this plugn does nothing!!!',
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'capability' => 'manage_options',
            'labels' => array(
                'name' => 'media360'
               
            ),
            'menu_icon' => 'dashicons-media-text',
        );
        register_post_type('media360', $args);
         
    }

    public function load_assets() {

        wp_enqueue_style('media360',plugin_dir_url(__FILE__).'media360.css',array(),1,'all');
        wp_enqueue_script('media360',plugin_dir_url(__FILE__).'media360.js',array('jquery'),1,'true');
        
    }

    public function load_shortcode() {

        return 'hello Chris and the rest of the team';

    }
}

new media360;