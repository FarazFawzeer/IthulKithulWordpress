<?php
/**
 * 
 * template Name: functions.php
 * Description: Add features to wordpress theme
 * 
 * 
 * 
 * 
 * 
 */


 function fn_theme_scripts(){
/**include style files */


//custom stylesheet
wp_enqueue_style('custom-style', get_stylesheet_uri());


//@media query responsive css file
wp_enqueue_style('media_responsive',get_template_directory_uri().'/assets/img');

}


add_action('wp_enqueue_scripts','fn_theme_scripts');


?>