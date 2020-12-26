<?php


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
            'autoRefresh' => true
        ],   
    );

    /** Add the bits needed for the code editor to work. */
    $cm_settings['codeEditor'] = wp_enqueue_code_editor($codemirror_settings);

    /** Localize the $cm_settings object to be used on-page. */
    wp_localize_script('wp-theme-plugin-editor', 'cm_settings', $cm_settings);

}

add_action('admin_enqueue_scripts', 'codemirror_enqueue_scripts');