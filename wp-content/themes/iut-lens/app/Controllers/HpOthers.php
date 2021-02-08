<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\HpOthers as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class HpOthers extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];



        if (!empty($datas['list'])) {
            $this->datas['list'] = $datas['list'];
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('homepage.others.items', $datas);
        endif;
    }
}