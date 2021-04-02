<?php

/**
 * Add the custom Codemirror Javascript to the page footer.
 */
function codemirror_js()
{
    if ( ! is_admin() ) {
        return;
    }
    
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            /** For every textarea with the class, initialise codemirror */
            $('.ue__codemirror textarea').each( function( index ) {
                wp.codeEditor.initialize(
                    this, cm_settings
                );
            });


            /**
             * Check every second.
             */
            function checkForNewCodeMirrors() {
                $('.ue__codemirror').each( function( index ) {
                    var textarea = $(this).find('textarea');
                    var prop = $(this).find('.CodeMirror').prop('CodeMirror');

                    if (typeof prop == typeof undefined){
                        wp.codeEditor.initialize(textarea, cm_settings);
                    }
                    
                });
            }

            setInterval(checkForNewCodeMirrors, 1000);

        });
    </script>
    <?php
}
add_action('acf/input/admin_footer', 'codemirror_js');