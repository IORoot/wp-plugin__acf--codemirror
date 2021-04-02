<?php


/**
 * Add the custom Codemirror CSS into the header.
 */
function codemirror_css()
{
    if ( ! is_admin() ) {
        return;
    }

    
    ?>
    <style type="text/css">
        <?php 
            include ANDYP_ACF_CODEMIRROR.'css/material.css'; 
        ?>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.8.55/css/materialdesignicons.min.css" rel="stylesheet">
    <?php
}

add_action('acf/input/admin_head', 'codemirror_css');