<?php
/**
 * Meta boxes
 *
 * @link       www.rakibhossain.cf
 * @since      1.0.0
 *
 * @package    Vcpm
 * @subpackage Vcpm/includes
 */

class Vcpm_Meta_Box
{
    
    public function meta_box_testimonial(){

        $rating_list = array(1,2,3,4,5);

        $fields = array(
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
                    'desc' => '',
                    'id' => 'rating',
                    'type' => 'select',
                    "options" => $rating_list
                )
            );
        $data = array(
            'id' => 'testimonial-meta-box',
            'title' => __('Testimonial Info', 'vcpm'),
            'page' => 'testimonial',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => $fields
        );

        return $data;
    }

    public function meta_box_portfolio(){
        $data = array(
            'id' => 'portfolio-meta-box',
            'title' =>  __('Portfolio Info', 'vcpm'),
            'page' => 'portfolio',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
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
            )
        );
        return $data;
    }
    public function meta_box_team(){
        $data = array(
            'id' => 'team-meta-box',
            'title' =>  __('Team Info', 'vcpm'),
            'page' => 'team',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                
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
                    'type' => 'text',
                ),
                array(
                'name' => __('Twitter', 'vcpm'),
                    'desc' => __('Ex: http://twitter.com/serakib', 'vcpm'),
                    'id' => 'twitter',
                    'type' => 'text'
                ),
                array(
                'name' => __('Linkedin', 'vcpm'),
                    'desc' => __('Ex: http://www.linkedin.com/in/serakib', 'vcpm'),
                    'id' => 'linkedin',
                    'type' => 'text'
                ),
                array(
                'name' => __('Github', 'vcpm'),
                    'desc' => __('Ex: http://www.github.com/serakib', 'vcpm'),
                    'id' => 'github',
                    'type' => 'text'
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
            )
        );

        return $data;
    }


    public function meta_box_skill(){
        $data = array(
            'id' => 'skill-meta-box',
            'title' =>  __('Skill Information', 'vcpm'),
            'page' => 'skill',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                
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
            )
        );
        return $data;
    }

    public function meta_box_partner(){
        $data = array(
            'id' => 'partner-meta-box',
            'title' =>  __('Partner Info', 'vcpm'),
            'page' => 'partner',
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                
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
                    'type' => 'text'
                )
            )
        );
        return $data;
    }


}