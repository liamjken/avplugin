<?php

add_action('wp_head', 'autoverify_sdk_wp_attr');
function autoverify_sdk_wp_attr(){
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
    $price = get_post_meta(get_the_ID(), 'price', true);
    $condition = get_post_meta(get_the_ID(), 'condition', true);
    $make = get_post_meta(get_the_ID(), 'make', true);
    $model = get_post_meta(get_the_ID(), 'serie', true);
    $trim = get_post_meta(get_the_ID(), 'trim', true);
    $mileage = get_post_meta(get_the_ID(), 'mileage', true);
    //Close PHP tags 
    ?>
<div id="av_vehicle_information" data-av-vin="<?php echo esc_attr($vin_num); ?>" data-av-price="<?php echo esc_attr($price); ?>" data-av-condition="<?php echo esc_attr($condition); ?>" data-av-make="<?php echo esc_attr($make); ?>" data-av-model="<?php echo esc_attr($model); ?>" data-av-trim="<?php echo esc_attr($trim); ?>" data-av-mileage="<?php echo esc_attr($mileage); ?>"></div>
<script async defer src=""></script>
    <?php //Open PHP tags
}
