<?php

/**
 * Fired during plugin deactivation
 *
 * @link       www.rakibhossain.cf
 * @since      1.0.0
 *
 * @package    Vcpm
 * @subpackage Vcpm/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Vcpm
 * @subpackage Vcpm/includes
 * @author     Rakib Hossain <serakib@gmail.com>
 */
class Vcpm_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		unregister_taxonomy('portfolio_category');
		unregister_post_type( 'services' );
		unregister_post_type( 'skill' );
		unregister_post_type( 'portfolio' );
		unregister_post_type( 'testimonial' );
		unregister_post_type( 'team' );
		unregister_post_type( 'partner' );

	}

}
