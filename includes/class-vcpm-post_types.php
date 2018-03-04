<?php

/**
 * Register custom post types
 *
 * @link       www.rakibhossain.cf
 * @since      1.0.0
 *
 * @package    Vcpm
 * @subpackage Vcpm/includes
 */
class Vcpm_Post_Types {

    /**
     * Create post types
     *
     * @link https://codex.wordpress.org/Function_Reference/register_post_type
     */
    public function vcpm_service() {
        $vcpm_service_params = array(
                'labels' => array(
                    'name' => __( 'Services', 'vcpm' ),
                    'singular_name' => __( 'Service' , 'vcpm'),
                    'add_new' => __( 'Add New Service', 'vcpm' ),
                    'add_new_item' => __( 'Add New Service', 'vcpm' ),
                    'edit_item' => __( 'Edit Service', 'vcpm' ),
                    'new_item' => __( 'Add New Service', 'vcpm' ),
                    'view_item' => __( 'View Service', 'vcpm' ),
                    'search_items' => __( 'Search Service', 'vcpm' ),
                    'not_found' => __( 'No Service found', 'vcpm' ),
                    'not_found_in_trash' => __( 'No Service found in trash', 'vcpm' )
                ),
                'menu_icon' => 'dashicons-art',
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
                'rewrite' => array(
                    "slug" => esc_attr__( 'service', 'vcpm' ) // Permalinks format
                    ),
                'public' => true,
                'has_archive' => true
            );
        register_post_type( 'services',
            apply_filters('vcpm_service_params', $vcpm_service_params)
        );
    }

    public function vcpm_skill() {
        $vcpm_skill_params = array(
            'labels' => array(
                'name' => __( 'My skills', 'vcpm' ),
                'singular_name' => __( 'Skill' , 'vcpm'),
                'add_new' => __( 'Add New Skill', 'vcpm' ),
                'add_new_item' => __( 'Add New Skill', 'vcpm' ),
                'edit_item' => __( 'Edit Skill', 'vcpm' ),
                'new_item' => __( 'Add New Skill', 'vcpm' ),
                'view_item' => __( 'View Skill', 'vcpm' ),
                'search_items' => __( 'Search Skill', 'vcpm' ),
                'not_found' => __( 'No Skill found', 'vcpm' ),
                'not_found_in_trash' => __( 'No Skill found in trash', 'vcpm' )
            ),
            'menu_icon' => 'dashicons-awards',
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite' => array(
                    "slug" => esc_attr__( 'skill', 'vcpm' ) // Permalinks format
                ),
            'public' => true,
            'has_archive' => true
        );
        register_post_type( 'skill',
            apply_filters('vcpm_skill_params', $vcpm_skill_params)
        );
    }

    public function vcpm_portfolio() {
        $vcpm_portfolio_params = array(
            'labels' => array(
                'name' => __( 'Portfolio', 'violet-plugin' ),
                'singular_name' => __( 'Portfolio' , 'violet-plugin'),
                'add_new' => __( 'Add New Portfolio', 'violet-plugin' ),
                'add_new_item' => __( 'Add New Portfolio', 'violet-plugin' ),
                'edit_item' => __( 'Edit Portfolio', 'violet-plugin' ),
                'new_item' => __( 'Add New Portfolio', 'violet-plugin' ),
                'view_item' => __( 'View Portfolio', 'violet-plugin' ),
                'search_items' => __( 'Search Portfolio', 'violet-plugin' ),
                'not_found' => __( 'No Portfolio found', 'violet-plugin' ),
                'not_found_in_trash' => __( 'No Portfolio found in trash', 'violet-plugin' )
            ),
            'menu_icon' => 'dashicons-groups',
            'public' => true,
            'supports' => array( 'title', 'thumbnail'),
            'capability_type' => 'post',
            'rewrite' => array(
                    "slug" => esc_attr__( 'portfolio', 'vcpm' ) // Permalinks format
                ), 
            'menu_position' => 5,
            'exclude_from_search' => true 
        );
        register_post_type( 'portfolio',
            apply_filters('vcpm_portfolio_params', $vcpm_portfolio_params)
        );
    }

    public function vcpm_testimonial() {
        $vcpm_testimonial_params = array(
            'labels' => array(
                'name' => __( 'Testimonials', 'vcpm' ),
                'singular_name' => __( 'Testimonial' , 'vcpm'),
                'add_new' => __( 'Add New Testimonial', 'vcpm' ),
                'add_new_item' => __( 'Add New Testimonial', 'vcpm' ),
                'edit_item' => __( 'Edit Testimonial', 'vcpm' ),
                'new_item' => __( 'Add New Testimonial', 'vcpm' ),
                'view_item' => __( 'View Testimonial', 'vcpm' ),
                'search_items' => __( 'Search Testimonial', 'vcpm' ),
                'not_found' => __( 'No Testimonial found', 'vcpm' ),
                'not_found_in_trash' => __( 'No Testimonial found in trash', 'vcpm' )
            ),
            'menu_icon' => 'dashicons-editor-paste-text',
            'supports' => array( 'title', 'editor', 'thumbnail'),
            'rewrite' => array(
                    "slug" => esc_attr__( 'testimonial', 'vcpm' ) // Permalinks format
                ),
            'public' => true,
            'has_archive' => true
        );
        register_post_type( 'testimonial',
            apply_filters('vcpm_testimonial_params', $vcpm_testimonial_params)
        );
    }

    public function vcpm_team() {
        $vcpm_team_params = array(
            'labels' => array(
                'name' => __( 'Members', 'vcpm' ),
                'singular_name' => __( 'Member' , 'vcpm'),
                'add_new' => __( 'Add New Member', 'vcpm' ),
                'add_new_item' => __( 'Add New Member', 'vcpm' ),
                'edit_item' => __( 'Edit Member', 'vcpm' ),
                'new_item' => __( 'Add New Member', 'vcpm' ),
                'view_item' => __( 'View Member', 'vcpm' ),
                'search_items' => __( 'Search Member', 'vcpm' ),
                'not_found' => __( 'No Member found', 'vcpm' ),
                'not_found_in_trash' => __( 'No Member found in trash', 'vcpm' )
            ),
            'menu_icon' => 'dashicons-groups',
            'supports' => array( 'title', 'thumbnail'),
            'rewrite' => array(
                    "slug" => esc_attr__( 'teams', 'vcpm' ) // Permalinks format
                ),
            'public' => true,
            'has_archive' => true
        );
        register_post_type( 'team',
            apply_filters('vcpm_team_params', $vcpm_team_params)
        );
    }

    public function vcpm_partner() {
        $vcpm_partner_params = array(
            'labels' => array(
                'name' => __( 'Partners', 'vcpm' ),
                'singular_name' => __( 'Partner' , 'vcpm'),
                'add_new' => __( 'Add New Partner', 'vcpm' ),
                'add_new_item' => __( 'Add New Partner', 'vcpm' ),
                'edit_item' => __( 'Edit Partner', 'vcpm' ),
                'new_item' => __( 'Add New Partner', 'vcpm' ),
                'view_item' => __( 'View Partner', 'vcpm' ),
                'search_items' => __( 'Search Partner', 'vcpm' ),
                'not_found' => __( 'No Partner found', 'vcpm' ),
                'not_found_in_trash' => __( 'No Partner found in trash', 'vcpm' )
            ),
            'menu_icon' => 'dashicons-businessman',
            'supports' => array( 'title','thumbnail' ),
            'rewrite' => array(
                    "slug" => esc_attr__( 'partner', 'vcpm' ) // Permalinks format
                ),
            'public' => true,
            'has_archive' => true
        );
        register_post_type( 'partner',
            apply_filters('vcpm_partner_params', $vcpm_partner_params)
        );
    }
}
