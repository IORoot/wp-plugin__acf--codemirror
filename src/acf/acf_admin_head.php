<?php


/**
 * Add the custom Codemirror CSS into the header.
 */
function codemirror_css()
{
    ?>
    <style type="text/css">
        <?php 
            include ANDYP_ACF_CODEMIRROR.'css/material.css'; 
        ?>
    </style>
    <?php
}

add_action('acf/input/admin_head', 'codemirror_css');