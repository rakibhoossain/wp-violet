<?php
/**
 * Meta box core functions
 *
 * @link       www.rakibhossain.cf
 * @since      1.0.0
 *
 * @package    Vcpm
 * @subpackage Vcpm/includes
 */

class Vcpm_Meta_Core
{
    /**
	* Meta box fields , post types are save in as array.
	*/
	protected $meta_box;

	/**
	* Initialize $meta_box by constructor.
	*/
	public function __construct($meta) {
		$this->meta_box = $meta;
	}

	/**
	* Add meta box.
	*/
    public function add()
    {
        add_meta_box($this->meta_box['id'], $this->meta_box['title'], [$this,'show_meta_box'], $this->meta_box['page'], $this->meta_box['context'], $this->meta_box['priority']);
    }
 
	/**
	* Save data from meta box.
	*/
    public function save($post_id) {
 		
 		/**
		 * verify nonce.
		 */       
        if (!isset($_POST[$this->meta_box['id'].'_nonce']) || !wp_verify_nonce($_POST[$this->meta_box['id'].'_nonce'], basename(__FILE__))) {
            return $post_id;
        }
		
		/**
		 * Check autosave.
		 */
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }
		
		/**
		 * check permissions.
		 */
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } else if (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
		
		/**
		 * Update meta box value.
		 */
        foreach ($this->meta_box['fields'] as $field) {
            $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
            update_post_meta($post_id, $field['id'], $new);
        }
    }

 
	/**
	* Callback function to show fields in meta box.
	*/
    public function show_meta_box($post) {
        // Use nonce for verification
        wp_nonce_field( basename( __FILE__ ), $this->meta_box['id'].'_nonce' );
        $this->vcpm_meta_fields($this->meta_box['fields'], $post);
    }

	/**
	* Meta box data show according to their input type.
	*/
    protected function vcpm_meta_fields($meta__fields, $post){

        echo '<table class="form-table">';

        foreach ($meta__fields as $field) {
            // get current post meta data
            $meta = get_post_meta($post->ID, $field['id'], true);
            
            echo '<tr>',
                    '<th style="width:20%"><label for="', $field['id'], '"><strong>', $field['name'], '</strong></label></th>',
                    '<td style="margin:0;padding:0;">';

            switch ($field['type']) {
                case 'info':
                    echo '<h3 style="margin:0;padding:0;">'.$field['desc'].'</h3>';
                    break;

                case 'text':
                    echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" class="vcpm-text" /><br />', '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                case 'select':
                    echo '<select name="', $field['id'], '" id="', $field['id'], '" style="min-width:30%">';
                    foreach ($field['options'] as $option) {
                        $opt = explode('|', $option);
                        if (count($opt) == 1) $opt[1] = strtolower($opt[0]);
                        echo '<option', $meta == $opt[1] ? ' selected="selected"' : '', ' value="' . $opt[1] . '"' , '>', $opt[0], '</option>';
                    }
                    echo '</select>', '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                case 'radio':
                    foreach ($field['options'] as $option) {
                        echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
                    }
                    echo '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                case 'checkbox':
                    echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />', '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                case 'color':
                    echo '<input type="hidden" class="color_field"  name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" style="min-width:30%" /><br />', '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                case 'range':
                    echo '
                        <div class="range-slider">
                            <input class="range-slider__range" type="range" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" min="0" max="100">
                            <span class="range-slider__value">'. $meta. '</span>
                        </div>', '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                case 'portfolio':
                    echo '<button type="button" class="button" id="img-', $field['id'], '">Choce</button>';
                    if ($meta=='') {
                        echo '<div class="port_img_preview none"><img src="'. $meta.'" id="port_img_preview" alt="File not selected" style="width: 200px; height: auto;"></div>'; 
                    }else{
                        echo '<div class="port_img_preview"><img src="'. $meta.'" id="port_img_preview" alt="Portfolio" style="width: 200px; height: auto;"></div>'; 
                    }
                    echo '<input type="hidden" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '"/>', '<span class="meta-desc">', $field['desc'],'</span>';
                    break;

                default:
                    echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="'. $meta. '" class="vcpm-text" /><br />', '<span class="meta-desc">', $field['desc'],'</span>';
            }

    echo '</td>',
        '</tr>';      
        }
        echo '</table>';

    }

}