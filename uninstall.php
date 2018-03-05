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
		 * Delete post and meta.
		 */
		foreach ( $vcpm_posts_data as $post_item ) {
			foreach ( $post_item['post'] as $post ) {

				$post_meta = get_post_meta( $post->ID );
				wp_delete_post( $post->ID, true );

				foreach ($post_meta as $key => $value) {
					delete_post_meta($post->ID, $key);
				}
			}
		}

		/**
		 * Delete taxonomy.
		 */
		global $wpdb;
		$wpdb->delete(
			$wpdb->term_taxonomy,
			array(
				'taxonomy' => 'portfolio_category',
			)
		);

	}

	vcpm_delete_plugin();