<?php
/*
* Plugin Name: Simple LESS
	author: Russell Fair
	url: http://q21.co/simple-less
	description: a simple way to use LESS in your theme.  Just activate this plugin and add a "theme.less" file to your theme's root and your off to the races. 
	plugin uri: http://q21.co/simple-less
	version: 0.1.1
*/

define('LE_VER', '011');
define('LE_TRANS_VER', '011');
define('LE_DIR', WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)));
define('LE_URL', WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)));
define('LE_THEME_URL', get_stylesheet_directory_uri() );

add_action('wp_head', 'less_js_old_way');
function less_js_old_way() {
//if you wonder why this code isn't sexy, it is because this is how Matt told me to do it till wp_enqueue_script supports rel tags ?>
<link rel="stylesheet/less" type="text/css" href="<?php echo LE_THEME_URL; ?>/theme.less">
<script src="<?php echo LE_URL; ?>less-1.2.0.min.js" type="text/javascript"></script>
<?php  }
?>
