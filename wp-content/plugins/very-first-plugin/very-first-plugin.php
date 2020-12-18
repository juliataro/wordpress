<?php
/*
Plugin Name: My First plugin
Plugin URI: http://yuliataro.ikt.khk.ee/
Description: This is my first WordPress Plugin i ever created
Version: 1.0
Author: Julia Taro
Author URI: http://yuliataro.ikt.khk.ee/

**/
function dh_modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>'; 
    
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );
?>
 