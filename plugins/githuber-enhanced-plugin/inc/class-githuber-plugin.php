<?php
/**
 * Githuber Plguin
 *
 * @author Terry Lin
 * @link https://terryl.in/githuber
 *
 * @package Githuber
 * @since 1.0.0
 * @version 1.1.1
 */

// Requires all necessary files.
require_once GITHUBER_PLUGIN_DIR . 'inc/class-wp-widget-githuber-toc.php';
require_once GITHUBER_PLUGIN_DIR . 'inc/class-post-type-repository.php';
require_once GITHUBER_PLUGIN_DIR . 'inc/class-githuber-walker.php';
require_once GITHUBER_PLUGIN_DIR . 'inc/githuber-shortcode.php';
require_once GITHUBER_PLUGIN_DIR . 'inc/githuber-functions.php';

/**
 * Githuber Plugin Core.
 */
class Githuber_Plugin {

	/**
	 * Constructer.
	 */
	public function __construct() {
		// add_action( 'admin_menu', array( $this, 'settings' ) );
	}

	/**
	 * Initialize.
	 *
	 * @return void
	 */
	public function init() {
		new Post_Type_Repository();
		add_action( 'widgets_init', array( $this, 'widgets' ) );
	}

	/**
	 * Githuber framework setting page.
	 *
	 * @return void
	 */
	public function settings() {
		// prearing..
	}

	/**
	 * Register Githuber widgets.
	 */
	public function widgets() {
		register_widget( 'WP_Widget_Githuber_TOC' );
	}
}
