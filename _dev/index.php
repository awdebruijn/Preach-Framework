<?php
/**
 * @package  WordPress
 * @subpackage  Preach
 * @since   Preach 0.1
 */

if ( ! class_exists( 'Timber' ) ) {
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
}

$data = Timber::get_context();
$data['posts'] = Timber::get_posts();

$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'home.twig' );
}

Timber::render( $templates, $data );