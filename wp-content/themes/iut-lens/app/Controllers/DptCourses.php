<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\DptCourses as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class DptCourses extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];



        $courses = [];

        if (!empty($datas['courses'])) {
            $courses_posts = $datas['courses'];
            $current_term_id = get_queried_object_id();

            while($courses_posts->have_posts()) {
                $courses_posts->the_post();

                $term = wp_get_post_terms( get_the_ID(), 'department');
                $term_id = $term[0]->term_id;

                if($current_term_id == $term_id) {
                    $course = [
                        'type'          => \get_field('_course_infos_type'),
                        'image_src'     => \wp_get_attachment_url(\get_field('_course_infos_image_id')),
                        'title'         => \get_field('_course_infos_title_short'),
                        'content'       => \get_the_excerpt(),
                        'link_url'      => \get_the_permalink(),
                        'color'         => \get_field('_dpt_color', 'department_' . $term_id)
                    ];
                    
                    $courses[] = $course;
                }
            }

            wp_reset_postdata();
        }

        $this->datas['courses'] = $courses;

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('department.courses.items', $datas);
        endif;
    }
}