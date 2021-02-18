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

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) {
            var_dump($datas);
            $this->view->show('course.assets', $datas);
        }
    }
}