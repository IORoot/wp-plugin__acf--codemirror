<?php

/*
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - ACF - Codemirror Class
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🔌PLUGIN</strong> | <em>ACF > Textarea</em> | Allows CODEMIRROR to run on a textarea by adding the .ue__codemirror class.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

define( 'ANDYP_ACF_CODEMIRROR', plugin_dir_path(__FILE__) );

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                           Enqueue CSS                                   │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_admin_head.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                            Enqueue JS                                   │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_admin_footer.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                       Localise JS Settings                              │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/wp/localise_js_settings.php';
