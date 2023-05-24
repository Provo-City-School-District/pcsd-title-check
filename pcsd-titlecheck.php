<?php
/*
  Plugin Name: PCSD Title Check
  Description: checks that the title is set on autosave/save.  Alerts if not true.
  Version: 1.0
  Author: Josh Espinoza
  Author URI: tech.provo.edu

  Credits:

  Referenced Materials:

  https://github.com/wp-plugins/post-title-validation/blob/master/post-title-validation.php
*/


add_action( 'admin_enqueue_scripts', 'pcsd_save_post_callback' );

function pcsd_save_post_callback($hook){
	if( 'post.php' != $hook && 'edit.php' != $hook && 'post-new.php' != $hook && 'classic-editor__forget' != $hook)
        return;
	wp_enqueue_script( 'custom_admin_script',  plugins_url('/pcsd-titlecheck.js', __FILE__));
}