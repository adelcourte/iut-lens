<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\DptHero as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class DptHero extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];


        
        if (!empty($datas['color'])) {
            $this->datas['color'] = $datas['color'];
        }

        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
        
        if (!empty($term->name)) {
            $this->datas['title'] = $term->name;
        }
        
        if (!empty($datas['content'])) {
            $this->datas['content'] = $datas['content'];
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('heroes.hero-department', $datas);
        endif;
    }
}