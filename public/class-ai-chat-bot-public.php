<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.respondly.com/
 * @since      1.0.0
 *
 * @package    Ai_Chat_Bot
 * @subpackage Ai_Chat_Bot/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ai_Chat_Bot
 * @subpackage Ai_Chat_Bot/public
 * @author     Respondly <customers@respondly.com>
 */
class Ai_Chat_Bot_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in Ai_Chat_Bot_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ai_Chat_Bot_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ai-chat-bot-public.css', array(), $this->version, 'all' );

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
		 * defined in Ai_Chat_Bot_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ai_Chat_Bot_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

//		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ai-chat-bot-public.js', array( 'jquery' ), $this->version, false );
        if (get_option('respondly-key')) {
            wp_enqueue_script($this->plugin_name, 'https://api.respondly.net/Web/Widgets/Chat?key=' . get_option('respondly-key'), array(), null, true);
        }
	}

}
