<?php

register_activation_hook( __FILE__, 'myplugin_activate' );
    function myplugin_activate() {
   //create a variable to specify the details of page

       $post = array(     
                 'post_content'   => '<div class="av-trade=iframe"></div>', //content of page
                 'post_title'     =>'Trade Appraisal', //title of page
                 'post_status'    =>  'publish' , //status of page - publish or draft
                 'post_type'      =>  'page'  // type of post
);
       wp_insert_post( $post ); // creates page
    
        
        }
