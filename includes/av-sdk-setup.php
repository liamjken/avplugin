<?php

add_action('wp_head', 'autoverify_sdk_wp_head');
function autoverify_sdk_wp_head(){
    //Close PHP tags 
    ?>
    <!-- This is the SDK setup without Attributes and is no longer required -->
  <!--  <script async defer src="<?php echo esc_attr($sdkurl); ?>"></script>-->
    <?php //Open PHP tags
}