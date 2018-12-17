<?php 
function dl_enqueue_style_child() {

    wp_register_style('parent-style', get_parent_theme_file_uri('/style.css'), null, null, null);
    wp_enqueue_style('parent-style');
   
}

add_action('wp_enqueue_scripts' , 'dl_enqueue_style_child');
