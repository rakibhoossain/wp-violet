<?php
/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Vcpm
 * @subpackage Vcpm/includes
 * @author     Rakib Hossain <serakib@gmail.com>
 */
class Vcpm_Activator {

	/**
	 * Action perform on activation.
	 *
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

        /**
         * Custom Post Types
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-vcpm-post_types.php';
        $vcpm_post_types = new Vcpm_Post_Types();

        /**
         * The problem with the initial activation code is that when the activation hook runs, it's after the init hook has run,
         * so hooking into init from the activation hook won't do anything.
         * You don't need to register the CPT within the activation function unless you need rewrite rules to be added
         * via flush_rewrite_rules() on activation. In that case, you'll want to register the CPT normally, via the
         * loader on the init hook, and also re-register it within the activation function and
         * call flush_rewrite_rules() to add the CPT rewrite rules.
         *
         * @link https://github.com/DevinVinson/WordPress-Plugin-Boilerplate/issues/261
         */

        $vcpm_post_types->vcpm_service();
        $vcpm_post_types->vcpm_skill();
        $vcpm_post_types->vcpm_portfolio();
        $vcpm_post_types->vcpm_testimonial();
        $vcpm_post_types->vcpm_team();
        $vcpm_post_types->vcpm_partner();

        flush_rewrite_rules();
        
	}

}
