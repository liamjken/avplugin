<?php

function srp_spin_function() {
    $spinCode = get_post_meta(get_the_id(), 'spincode', true);

    if ($spinCode > 0) {
        $aim360replace = "display:none";
    }
    
   ob_start();
   ?> 
    <div id="spin-div" style="max-width: 800px; margin: 10px auto;"><script src="https://static.instavid360.com/p/0.7.latest/spin360.lite.js" data-portal="WQBK2" data-spin="<?php echo esc_attr($spinCode); ?>"></script></div> 
   <?php
   return ob_get_clean();
   }
   add_shortcode('srp-aim-gallery', 'srp_spin_function'); 