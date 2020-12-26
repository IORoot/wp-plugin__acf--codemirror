<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'ACF CodeMirror',
        'icon'      => 'iframe-braces',
        'color'     => '#242424',
        'path'      => __FILE__,
    ]);
} );