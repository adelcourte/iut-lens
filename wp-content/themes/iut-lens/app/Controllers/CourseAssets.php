<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\CourseAssets as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class CourseAssets extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];



        if ($datas['title']) {
            $this->datas['title'] = $datas['title'];
        }

        if ($datas['content']) {
            $this->datas['content'] = $datas['content'];
        }

        $id = \get_the_ID();
        if($dpt = wp_get_post_terms($id, 'department')) {
            $this->datas['dpt_color'] = get_field('_dpt_color', $dpt[0]->taxonomy.'_'.$dpt[0]->term_id);
        }

        $this->datas['anchor_id'] = 'course_assets';
        $this->datas['anchor_title'] = 'Atouts de la formation';

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) {
            $this->view->show('course.content', $datas);
        }
    }
}