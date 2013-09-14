<?php
/*
  Plugin Name: Back To Top
  Plugin URI: http://arkapravamajumder.com
  Author URI: http://www.fb.com/arkaindas
  Author: Arkaprava majumder
  Version:1.0
  Description: This plugin will create a "back to top" or "scroll to top button" for your website with smooth scrolling and 25 images.
  License: GPL
  
 */
define('PLUGIN_DIR_NAME', 'backtotop');

class backtotop{
	function __construct(){
		add_action("wp_enqueue_scripts",array(&$this,'register_javascript'));
		
		add_action("wp_footer",array(&$this,'add_my_div'));
		add_action("admin_menu",array(&$this,'add_my_menu'));
		}
	function add_my_div(){
		
	$image_value=get_option("image_name");
	
				echo "<div  id=\"top\"><img style=\"max-width:120px;max-height:80px;\" src=\"".plugins_url(PLUGIN_DIR_NAME."/img/".$image_value.".png")."\"></div>";
			
	
		}
	function register_javascript(){
		wp_enqueue_script('jquery');
		wp_register_script('backtotopjs',plugins_url(PLUGIN_DIR_NAME.'/js/backtotopbyarka.js'),'','',true);
		wp_enqueue_script('backtotopjs');
		}
		
	\	
	function add_my_menu(){
		
		add_options_page('Back To Top Settings','Back To Top Settings','6','backtotopmenu',array(&$this,'my_menu_content'));
		}
	function my_menu_content(){
		include('inc/backend_body.php');
		}
	
	}
	new backtotop();

?>