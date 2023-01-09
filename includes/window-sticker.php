<?php 

function av_window_sticker_button_function() {
    $window_sticker = get_post_meta(get_the_ID(), 'window_sticker', true);
	ob_start();
	?> 

<?php if(!empty($window_sticker)) { ?>	
    <div style="
    background-color: #005596;
    text-align: center;
    padding: 7px 10px;
    border-radius: 5px;
    margin-bottom: 5px;
    margin-top: -2px;
"><a style="color: #ffff;font-weight: 600; " href="<?php echo $window_sticker; ?>" target="_blank">Window Sticker</a></div>
            <?php } ?>

<?php
	return ob_get_clean();
}

add_shortcode('av-window-sticker', 'av_window_sticker_button_function'); 