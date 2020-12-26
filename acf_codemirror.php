<?php

/*
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - ACF Codemirror
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🔌PLUGIN</strong> | <em>ACF > Textarea</em> | Allows CODEMIRROR to run on a textarea by adding the .ue__codemirror class.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


function codemirror_enqueue_scripts($hook)
{

    /** Add the codemirror script & style */
    wp_enqueue_script('wp-theme-plugin-editor');
    wp_enqueue_style('wp-codemirror');

    /** Configure the codemirror default settings */
    $codemirror_settings = array(
        'type' => 'text/x-php',
        'codemirror' => [
            'theme' => 'material-darker',
            'extraKeys' => [
                'Ctrl-Y' =>'foldAll',
                'Ctrl-I' =>'unfoldAll',
            ],
            'foldGutter' => true,
            'height' => 40,
            'indentUnit' => 4,
            'lineWrapping' => true,
            'refresh' => true,
        ],   
    );

    /** Add the bits needed for the code editor to work. */
    $cm_settings['codeEditor'] = wp_enqueue_code_editor($codemirror_settings);

    /** Localize the $cm_settings object to be used on-page. */
    wp_localize_script('wp-theme-plugin-editor', 'cm_settings', $cm_settings);

}

add_action('admin_enqueue_scripts', 'codemirror_enqueue_scripts');


/**
 * Add the custom Codemirror Javascript to the page footer.
 */
function codemirror_js()
{
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            /** For every textarea with the class, initialise codemirror */
            $('.ue__codemirror textarea').each( function( index ) {
                wp.codeEditor.initialize(
                    this, cm_settings
                );
            });
            
        });

        
                
    </script>
    <?php
}
add_action('acf/input/admin_footer', 'codemirror_js');


/**
 * Add the custom Codemirror CSS into the header.
 */
function codemirror_css()
{
    ?>
    <style type="text/css">
        <?php include 'css/material.css'; ?>
    </style>
    <?php
}

add_action('acf/input/admin_head', 'codemirror_css');
