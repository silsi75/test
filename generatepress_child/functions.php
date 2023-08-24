<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 // css personalized
 wp_enqueue_style('cookies', get_stylesheet_directory_uri() . '/css/cookies.css', array(), filemtime(get_stylesheet_directory() . '/css/cookies.css'), false);
 wp_enqueue_style('botones', get_stylesheet_directory_uri() . '/css/botones.css', array(), filemtime(get_stylesheet_directory() . '/css/botones.css'), false);

 // FUNCIÓN PARA DESACTIVAR LAS ACTUALIZACIONES DEL PLUGIN DE COOKIES
 function disable_plugin_updates( $value ) {
     unset( $value->response['gdpr-cookie-compliance/moove-gdpr.php'] );
     return $value;
 }
 add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
