<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\HpFields as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class HpFields extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();

        if (!empty($datas['title'])) :
            $title = $datas['title'];
        else :
            $title = '';
        endif;

        if (!empty($datas['content'])) :
            $content = $datas['content'];
        else :
            $content = '';
        endif;

        if ($link = $datas['link']) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'];
        else :
            $link_url = '';
            $link_title = '';
            $link_target = '';
        endif;

        $fields = [];
        if($datas['terms']) :
            foreach($datas['terms'] as $term) :
                $fields[] = [
                    'color'     => get_field('_field_color', $term->taxonomy.'_'.$term->term_id),
                    'diplomas'  => get_field('_field_diplomas', $term->taxonomy.'_'.$term->term_id),
                    'title'     => $term->name,
                    'content'   => $term->description,
                    'link_url'  => get_term_link($term),
                ];
            endforeach;
        endif;

        $this->datas = [
            'title'         => $title,
            'content'       => $content,
            'link_url'      => $link_url,
            'link_title'    => $link_title,
            'link_target'   => $link_target,
            'fields'        => $fields,
        ];

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('homepage.fields.items', $datas);
        endif;
    }
}