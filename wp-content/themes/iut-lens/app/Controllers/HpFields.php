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

        var_dump($datas);

        $fields = [];
        if($datas['taxonomies']) :
            foreach($datas['taxonomies'] as $tax) :
                $fields[] = [
                    'color'     => get_field('_field_color', $tax->taxonomy.'_'.$tax->term_id),
                    'name'      => $tax->name,
                    'content'   => $tax->description,
                    'link_url'  => get_term_link($tax),
                ];
            endforeach;
        endif;

        var_dump($fields);

        $this->datas = [
            'title' => 'hello world',
        ];

        $this->render($this->datas);
    }

    public function render($datas){
        $this->view->show( 'homepage.fields', $datas);
    }
}