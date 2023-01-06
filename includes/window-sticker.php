<?php 

function av_window_sticker_button_function() {
    $window_sticker = get_post_meta(get_the_ID(), 'window_sticker', true);
	ob_start();
	?> 

<?php if(!empty($car_fax_link)) { ?>	
             <a style="color:#000000;" href="<?php echo $window_sticker; ?>" target="_blank">Window Sticker</a>
            <?php } ?>

<?php
	return ob_get_clean();
}

add_shortcode('av-window-sticker', 'av_window_sticker_button_function'); 