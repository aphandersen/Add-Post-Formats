<?php
/**
* Plugin Name: Add Post Formats
* Description: Plugin that enable the support of post formats in WordPress, even though your theme does not support them
* Author: Andreas Andersen
* Author URI: https://www.it-blogger.dk
* Plugin URI: https://www.it-blogger.dk
* Version: 1.0
*/

add_theme_support( 'post-formats', array('gallery','quote','video','aside','image', 'link','status','audio','chat') );
?>
