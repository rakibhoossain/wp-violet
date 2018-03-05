<?php
/**
 * Meta boxes and their functions 
 *
 * @link       www.rakibhossain.cf
 * @since      1.0.0
 *
 * @package    Vcpm
 * @subpackage Vcpm/includes
 */

class Vcpm_Meta
{
    public static function vcpm_meta_box(){

        $rating_list = array(1,2,3,4,5);

        $testimonial_fields = array(
            array(
                'name' => __('Full Name', 'vcpm'),
                'desc' => '',
                'id' => 'name',
                'type' => 'text'
            ),
            array(
                'name' => __('Position', 'vcpm'),
                'desc' => '',
                'id' => 'position',
                'type' => 'text'
            ),
            array(
                'name' => __('Rating', 'vcpm'),
                'desc' => '1 to 5',
                'id' => 'rating',
                'type' => 'select',
                "options" => $rating_list
            )
        );

        $portfolio_fields = array(
            array(
                'name' => __('Sub title', 'vcpm'),
                'desc' => '',
                'id' => 'sub_name',
                'type' => 'text'
            ),
            array(
                'name' => __('Portfolio full image', 'vcpm'),
                'desc' => '',
                'id' => 'portfolio_img',
                'type' => 'portfolio'
            ),
            array(
                'name' => __('Portfolio Link', 'vcpm'),
                'desc' => '',
                'id' => 'portfolio_link',
                'type' => 'text'
            )
        );

        $team_fields = array(

            array(
                'name' => __('Full Name', 'vcpm'),
                'desc' => '',
                'id' => 'team_name',
                'type' => 'text'
            ),
            array(
                'name' => __('Position', 'vcpm'),
                'desc' => '',
                'id' => 'team_position',
                'type' => 'text'
            ),
            array(
                'name' => '',
                'desc' => __('Enter Social Links', 'vcpm'),
                'type' => 'info',
                'id'   => ''
            ),
            array(
                'name' => __('Facebook', 'vcpm'),
                'desc' => __('Ex: http://facebook.com/prof.rakib', 'vcpm'),
                'id' => 'facebook',
                'type' => 'url',
            ),
            array(
                'name' => __('Twitter', 'vcpm'),
                'desc' => __('Ex: http://twitter.com/serakib', 'vcpm'),
                'id' => 'twitter',
                'type' => 'url'
            ),
            array(
                'name' => __('Linkedin', 'vcpm'),
                'desc' => __('Ex: http://www.linkedin.com/in/serakib', 'vcpm'),
                'id' => 'linkedin',
                'type' => 'url'
            ),
            array(
                'name' => __('Github', 'vcpm'),
                'desc' => __('Ex: http://www.github.com/serakib', 'vcpm'),
                'id' => 'github',
                'type' => 'url'
            ),
            array(
                'name' => '',
                'desc' => __('Enter Top 1 Skill', 'vcpm'),
                'type' => 'info',
                'id'   => ''
            ),
            array(
                'name' => __('Name', 'vcpm'),
                'desc' => __('Skill Name (Ex: Photoshop)', 'vcpm'),
                'id' => 'skill_1_name',
                'type' => 'text'
            ),
            array(
                'name' => __('Percent', 'vcpm'),
                'desc' => __('Skill Percent out of 100', 'vcpm'),
                'id' => 'skill_1_percent',
                'type' => 'range'
            ),
            array(
                'name' => '',
                'desc' => __('Enter Top 2 Skill', 'vcpm'),
                'type' => 'info',
                'id'   => ''
            ),
            array(
                'name' => __('Name', 'vcpm'),
                'desc' => __('Skill Name (Ex: HTML)', 'vcpm'),
                'id' => 'skill_2_name',
                'type' => 'text'
            ),
            array(
                'name' => __('Percent', 'vcpm'),
                'desc' => __('Skill Percent out of 100', 'vcpm'),
                'id' => 'skill_2_percent',
                'type' => 'range'
            ),
            array(
                'name' => '',
                'desc' => __('Enter Top 3 Skill', 'vcpm'),
                'type' => 'info',
                'id'   => ''
            ),
            array(
                'name' => __('Name', 'vcpm'),
                'desc' => __('Skill Name (Ex: CSS)', 'vcpm'),
                'id' => 'skill_3_name',
                'type' => 'text'
            ),
            array(
                'name' => __('Percent', 'vcpm'),
                'desc' => __('Skill Percent out of 100', 'vcpm'),
                'id' => 'skill_3_percent',
                'type' => 'range'
            )
        );

        $skill_fields = array(

            array(
                'name' => __('Percent', 'vcpm'),
                'desc' => __('Skill Percent out of 100', 'vcpm'),
                'id' => 'skill_percent',
                'type' => 'range'
            ),
            array(
                'name' => __('Color', 'vcpm'),
                'desc' => __('Skill Color', 'vcpm'),
                'id' => 'skill_color',
                'type' => 'color'
            )
        );
        $partner_fields = array(

            array(
                'name' => __('Name', 'vcpm'),
                'desc' => __('Ex: Intel', 'vcpm'),
                'id' => 'name',
                'type' => 'text'
            ),
            array(
                'name' => __('Website', 'vcpm'),
                'desc' => __('Ex: http://www.intel.com', 'vcpm'),
                'id' => 'website',
                'type' => 'url'
            )
        );


        $data['testimonial'] = array(
            'id' => 'testimonial-meta-box',
            'title' => __('Testimonial Info', 'vcpm'),
            'page' => 'testimonial',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => apply_filters('vcpm_meta_fields_testimonial', $testimonial_fields)
        );

        $data['portfolio'] = array(
            'id' => 'portfolio-meta-box',
            'title' =>  __('Portfolio Info', 'vcpm'),
            'page' => 'portfolio',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => apply_filters('vcpm_meta_fields_portfolio', $portfolio_fields)
        );

        $data['team'] = array(
            'id' => 'team-meta-box',
            'title' =>  __('Team Info', 'vcpm'),
            'page' => 'team',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => apply_filters('vcpm_meta_fields_team', $team_fields)
        );

        $data['skill'] = array(
            'id' => 'skill-meta-box',
            'title' =>  __('Skill Information', 'vcpm'),
            'page' => 'skill',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => apply_filters('vcpm_meta_fields_skill', $skill_fields)
        );

        $data['partner'] = array(
            'id' => 'partner-meta-box',
            'title' =>  __('Partner Info', 'vcpm'),
            'page' => 'partner',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => apply_filters('vcpm_meta_fields_partner', $partner_fields)
        );


        return apply_filters('vcpm_meta_box',$data);
    }


    /**
	* Meta box array.
	*/
	protected $meta_box;

    /**
    * Current post type.
    */
    protected $post_type;

    /**
    * Add meta box.
    */
    public function add()
    {  
        $this->meta_box = self::vcpm_meta_box();     

        foreach ($this->meta_box as $meta_item) {

            add_meta_box($meta_item['id'], $meta_item['title'], [$this,'show_meta_box'], $meta_item['page'], $meta_item['context'], $meta_item['priority']);  
        }

    }
 
    /**
     * Save data from meta box.
     */
    public function save($post_id) {

         $this->meta_box = self::vcpm_meta_box();

        if (array_key_exists(get_post_type($post_id),$this->meta_box))
          {
            $this->post_type =  get_post_type($post_id);
          }else{
            return $post_id;
          }
        
        /**
         * verify nonce.
         */       
        if (!isset($_POST[$this->meta_box[$this->post_type]['id'].'_nonce']) || !wp_verify_nonce($_POST[$this->meta_box[$this->post_type]['id'].'_nonce'], basename(__FILE__))) {
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
        foreach ($this->meta_box[$this->post_type]['fields'] as $field) {
            $new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';

            switch ($field['type']) {
                case 'text':
                    $new = sanitize_text_field($new);
                    break;
                case 'select':
                    $new = sanitize_text_field($new);
                    break;
                case 'radio':
                    $new = sanitize_text_field($new);
                    break;
                case 'checkbox':
                    $new = sanitize_text_field($new);
                    break;
                case 'color':
                    $new = sanitize_hex_color($new);
                    break;
                case 'range':
                    $new = absint($new);
                    break;
                case 'portfolio':
                    $new = esc_url($new);
                    break;
                case 'url':
                    $new = esc_url($new);
                    break;
                default:
                    $new = sanitize_text_field($new);
            }

            update_post_meta($post_id, $field['id'], $new);
        }
    }
 
    /**
     * Callback function to show fields in meta box.
     */
    public function show_meta_box($post) {

        if (array_key_exists(get_post_type( $post->ID ),$this->meta_box))
          {
            $this->post_type =  get_post_type( $post->ID );

            // Use nonce for verification
            wp_nonce_field( basename( __FILE__ ), $this->meta_box[$this->post_type]['id'].'_nonce' );
            $this->vcpm_meta_fields($this->meta_box[$this->post_type]['fields'], $post);

          }else{
            return;
          }
    }    

    /**
     * Meta box data show according to their input type.
     */
    protected function vcpm_meta_fields($meta__fields, $post){
        $html = '';
        $html .= '<table class="form-table vcpm-table">';
        foreach ($meta__fields as $field) {
            // get current post meta data
            $meta = get_post_meta($post->ID, $field['id'], true);

            $html.= '<tr>
            
                <th style="width:20%">
                    <label for="'. $field['id']. '">
                        <strong>'. $field['name']. '</strong>
                    </label>
                </th>

                <td style="margin:0;padding:0;">';
            switch ($field['type']) {
                case 'info':
                    $html .= '<h3 style="margin:0;padding:0;">'.$field['desc'].'</h3>';
                    break;
                case 'text':
                    $html .= '<input type="text" title="'.$field['desc'].'" name="'. $field['id']. '" id="'. $field['id']. '" value="'. $meta. '" class="vcpm-text" />';
                    break;
                case 'select':
                    $html.= '<select name="'. $field['id']. '" title="'.$field['desc'].'" id="'. $field['id']. '" style="min-width:30%">';
                    $html_select ='';
                    foreach ($field['options'] as $option) {
                        $opt = explode('|', $option);
                        if (count($opt) == 1) $opt[1] = strtolower($opt[0]);
                        $html_select .= '<option '. selected( $meta, $opt[1], false ). ' value="' . $opt[1] . '"' . '>'. $opt[0]. '</option>';
                    }
                    $html.= $html_select.'</select>';
                    break;
                case 'radio':
                    foreach ($field['options'] as $option) {

                        $html.= '<label class="mr-10"><input type="radio" name="'. $field['id']. '" title="'.$field['desc'].'" value="'. $option['value']. '"'.checked( $option['value'], $meta, false ).' />'. $option['name'] . '</label>';
                    }
                    break;
                case 'checkbox':
                    $arr = explode(',',$meta);
                    $html.= '<div class="multiple__checkbox">';

                    foreach ($field['options'] as $option) {
                        $option_value = strtolower($option['value']);
                        $option_value = preg_replace('/\s+/', '_', $option_value);
                        $checked = in_array($option_value, $arr) ? ' checked="checked"' : '';

                        $html.= '<input title="'.$field['desc'].'" class="single__checkbox" id="'.$option_value.'id" type="checkbox" value="'. $option_value. '"'.$checked.' /><label class="mr-10" for="'.$option_value.'id">'.$option['name'].'</label>';
                    }
                    $html.= '
                    <input type="hidden" class="multiple__checkbox__value" name="'. $field['id']. '" id="'. $field['id']. '" value="'. $meta. '" /></div>';
                    break;
                case 'color':
                    $html.= '<input type="hidden" class="color_field"  name="'. $field['id']. '" id="'. $field['id']. '" value="'. $meta. '" style="min-width:30%" /><br />'. '<span class="meta-desc">'. $field['desc'].'</span>';
                    break;
                case 'range':
                    $html.= '
                        <div class="range-slider">
                            <input class="range-slider__range"  title="'.$field['desc'].'" type="range" name="'. $field['id']. '" id="'. $field['id']. '" value="'. $meta. '" min="0" max="100">
                            <span class="range-slider__value">'. $meta. '</span>
                        </div>';
                    break;
                case 'portfolio':
                    $url = esc_url($meta);
                    $html.= '<button type="button" title="'.$field['desc'].'" class="button" id="img-'. $field['id']. '">Choce</button>';
                    if ($meta=='') {
                        $html.= '<div class="port_img_preview none"><img src="'. $url.'" id="port_img_preview" alt="File not selected" style="width: 200px; height: auto;"></div>'; 
                    }else{
                        $html.= '<div class="port_img_preview"><img src="'. $url.'" id="port_img_preview" alt="Portfolio" style="width: 200px; height: auto;"></div>'; 
                    }
                    $html.= '<input type="hidden" name="'. $field['id']. '" id="'. $field['id']. '" value="'. $url. '"/>';
                    break;
                default:
                    $html .= '<input type="text" title="'.$field['desc'].'" name="'. $field['id']. '" id="'. $field['id']. '" value="'. $meta. '" class="vcpm-text" />';
            }

            $html.= '</td></tr>';

        }
        $html .= '</table>';

        echo apply_filters('vcpm_meta_fields_control', $html, $meta__fields, $post);
    }
}