<?php 

function aim_listings_buttons_function() {
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
    $price = get_post_meta(get_the_ID(), 'price', true);
    $condition = get_post_meta(get_the_ID(), 'condition', true);
    $make = get_post_meta(get_the_ID(), 'make', true);
    $model = get_post_meta(get_the_ID(), 'serie', true);
    $trim = get_post_meta(get_the_ID(), 'trim', true);
    $sale_price = get_post_meta(get_the_ID(), 'sale_price', true);
	ob_start();
	?> 
                <div class="av-srp-ecomm" data-av-vin="<?php echo esc_attr($vin_num); ?>" data-av-price="<?php echo esc_attr($price); ?>" data-av-selling="<?php echo esc_attr($sale_price); ?>" data-av-condition="<?php echo esc_attr($condition); ?>" data-av-make="<?php echo esc_attr($make); ?>" data-av-model="<?php echo esc_attr($model); ?>" data-av-trim="<?php echo esc_attr($trim); ?>" ></div> <?php
	return ob_get_clean();
}

add_shortcode('aim-buttons-listing', 'aim_listings_buttons_function');  


function vsa_listings_buttons_function() {
    $vin_num = get_post_meta(get_the_id(), 'vin_number', true);
	ob_start();
	?> 
                <a href="/virtual-sales-assistant/?<?php echo esc_attr($vin_num); ?>" target=_deal><img class="srp-vsa-b" src="<?php echo plugin_dir_url( __DIR__ ) . '/img/CTA_With_No_Negotiate_TextOnly.gif'; ?>" style="margin-top: 10px; width:100%;border-radius: 20px;background: var(--aimMainColor); "></a> <?php
	return ob_get_clean();
}

add_shortcode('vsa-buttons-listing', 'vsa_listings_buttons_function'); 
