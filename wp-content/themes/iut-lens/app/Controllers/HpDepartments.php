<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\HpDepartments as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class HpDepartments extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];


        
        if (!empty($datas['title'])) {
            $this->datas['title'] = $datas['title'];
        }

        if (!empty($datas['content'])) {
            $this->datas['content'] = $datas['content'];
        }

        if (!empty($datas['link'])) {
            $this->datas['link_url'] = $datas['link']['url'];
            $this->datas['link_target'] = $datas['link']['target'];
            $this->datas['link_title'] = $datas['link']['title'];
        }

        $this->datas['departments'] = [];
        if($datas['terms']) :
            foreach($datas['terms'] as $term) :
                $this->datas['departments'][] = [
                    'color'     => get_field('_dpt_color', $term->taxonomy.'_'.$term->term_id),
                    'diplomas'  => get_field('_dpt_diplomas', $term->taxonomy.'_'.$term->term_id),
                    'title'     => $term->name,
                    'content'   => $term->description,
                    'link_url'  => get_term_link($term),
                ];
            endforeach;
        endif;

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('homepage.departments.items', $datas);
        endif;
    }
}