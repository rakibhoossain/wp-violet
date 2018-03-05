<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       www.rakibhossain.cf
 * @since      1.0.0
 *
 * @package    Vcpm
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

	/**
	* Delete all post and meta data.
	*/
	function vcpm_delete_plugin(){

		$vcpm_posts_data = array(
			array(
				'post' => get_posts(
					array(
						'numberposts' => -1,
						'post_type' => 'services',
						'post_status' => 'any',
					)
				)
			),
			array(
				'post' => get_posts(
					array(
						'numberposts' => -1,
						'post_type' => 'skill',
						'post_status' => 'any',
					)
				)
			),
			array(
				'post' => get_posts(
					array(
						'numberposts' => -1,
						'post_type' => 'portfolio',
						'post_status' => 'any',
					)
				)
			),
			array(
				'post' => get_posts(
					array(
						'numberposts' => -1,
						'post_type' => 'testimonial',
						'post_status' => 'any',
					)
				)
			),
			array(
				'post' => get_posts(
					array(
						'numberposts' => -1,
						'post_type' => 'team',
						'post_status' => 'any',
					)
				)
			),
			array(
				'post' => get_posts(
					array(
						'numberposts' => -1,
						'post_type' => 'partner',
						'post_status' => 'any',
					)
				)
			)

		);
		
		/**
		 * Delete post.
		 */
		foreach ( $vcpm_posts_data as $post_item ) {
			foreach ( $post_item['post'] as $post ) {
				wp_delete_post( $post->ID, true );
			}
		}

		/**
		 * Delete Meta.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-vcpm-meta.php';
		$meta_data = Vcpm_Meta::vcpm_meta_box();

		foreach ($meta_data as $meta_item) {
			foreach ($meta_item['fields'] as $field) {
				 delete_post_meta_by_key( $field['id'] );
        	}  
        }
	}

	//vcpm_delete_plugin();