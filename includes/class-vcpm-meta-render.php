<?php
/**
 * Register all actions and filters for the plugin.
 *
 * Maintain a list of all hooks that are registered throughout
 * the plugin, and register them with the WordPress API. Call the
 * run function to execute the list of actions and filters.
 *
 * @package    Vcpm
 * @subpackage Vcpm/includes
 * @author     Rakib Hossain <serakib@gmail.com>
 */
class Vcpm_Meta_Fields_Render {
	public function meta_fields_show($html, $meta__fields,$post){



        return $html;
	}
}