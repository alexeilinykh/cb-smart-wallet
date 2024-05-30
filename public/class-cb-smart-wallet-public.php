<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    CB_Smart_Wallet
 * @subpackage CB_Smart_Wallet/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    CB_Smart_Wallet
 * @subpackage CB_Smart_Wallet/public
 * @author     Your Name <alexeilinykh@gmail.com>
 */
class CB_Smart_Wallet_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $cb_smart_wallet   The ID of this plugin.
	 */
	private $cb_smart_wallet;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $cb_smart_wallet       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $cb_smart_wallet, $version ) {

		$this->cb_smart_wallet = $cb_smart_wallet;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in CB_Smart_Wallet_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The CB_Smart_Wallet_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->cb_smart_wallet, plugin_dir_url( __FILE__ ) . 'css/cb-smart-wallet-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in CB_Smart_Wallet_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The CB_Smart_Wallet_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->cb_smart_wallet, plugin_dir_url( __FILE__ ) . 'js/cb-smart-wallet-public.js', array( 'jquery' ), $this->version, false );

	}

}
