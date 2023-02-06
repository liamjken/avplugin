<?php 

if ( function_exists( 'vc_map' ) ) {
	add_action( 'init', 'vc_av_elements' );
}

function vc_av_elements() {

//av team members	
vc_map(
	array(
		'name'     => __( 'AV Our team', 'motors-wpbakery-widgets' ),
		'base'     => 'av_our_team',
		'category' => __( 'AV General', 'motors-wpbakery-widgets' ),
		'params'   => array(
			array(
				'type'       => 'attach_image',
				'heading'    => __( 'Image', 'motors-wpbakery-widgets' ),
				'param_name' => 'image',
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Image size', 'motors-wpbakery-widgets' ),
				'param_name'  => 'image_size',
				'value'       => '257x170',
				'description' => __( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'motors-wpbakery-widgets' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Team member Name', 'motors-wpbakery-widgets' ),
				'param_name' => 'name',
				'holder'     => 'div',
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Team member position', 'motors-wpbakery-widgets' ),
				'param_name' => 'position',
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Team member bio', 'motors-wpbakery-widgets' ),
				'param_name' => 'bio',
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Team member email', 'motors-wpbakery-widgets' ),
				'param_name' => 'email',
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Team member phone', 'motors-wpbakery-widgets' ),
				'param_name' => 'phone',
			),
		),
	)
);
};
