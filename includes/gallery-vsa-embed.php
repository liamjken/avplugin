<?php

function aim_gallery_function() {
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
    $spinCode = get_post_meta(get_the_id(), 'spincode', true);

    if ($spinCode > 0) {
        $aim360replace = "display:none";
    }
    
   ob_start();
   ?> 
  <div id="aim360_iframe_container" style="<?php echo esc_attr($aim360replace); ?>" aim360_vin="<?php echo esc_attr($vin_num); ?>" dealer_id="<?php echo do_shortcode("[aimDealerID]"); ?>" aim360_iframe_background="0084dd" aim360_iframe_width="100%" aim360_iframe_height="600" no_gallery="0"></div><script type="text/javascript" src="https://automediaservices.com/apps/threesixty/js/aim360_developer_iframe.js"></script>
    <div class="av-spotlight"></div>
   <?php
   return ob_get_clean();
   }
   add_shortcode('aim-gallery', 'aim_gallery_function'); 