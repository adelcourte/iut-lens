<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\CourseInfos as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class CourseInfos extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];



        if ($datas['title']) {
            $this->datas['title'] = $datas['title'];
        }

        if ($datas['entry']) {
            $this->datas['entry'] = $datas['entry'];
        }

        if ($datas['join']) {
            $this->datas['join'] = $datas['join'];
        }

        if ($datas['image_id']) {
            $this->datas['image_src'] = \wp_get_attachment_url($datas['image_id']);
        }

        if ($datas['content']) {
            $this->datas['content'] = $datas['content'];
        }

        $id = \get_the_ID();
        if($field = wp_get_post_terms($id, 'field')) {
            $this->datas['field_name'] = $field[0]->name;
            $this->datas['field_url'] = get_term_link($field[0]);
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) {
            var_dump($datas);
            $this->view->show('course.infos', $datas);
        }
    }
}