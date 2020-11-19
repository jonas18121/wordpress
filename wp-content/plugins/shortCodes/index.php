<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: jonas
  Version: 1.0.0
 */

 //[coucou]
function hello(){
    return 'Hello toi, t\'es pas venu en soirée toi ';
}

add_shortcode('coucou', 'hello' );