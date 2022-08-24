<?php

add_action('wp_head', 'autoverify_sdk_wp_head');
function autoverify_sdk_wp_head(){
    //Close PHP tags 
    ?>
    <!-- This is the SDK setup without Attributes and is no longer required -->
  <!--  <script async defer src="https://sdk.autoverify.com/09182288-08d7-427e-8256-725bbd593e18/162c4d71-4d82-40d4-a1aa-a747ffbf12a8/sdk.min.js"></script>-->
    <?php //Open PHP tags
}