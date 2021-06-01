<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\ContactForm as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class ContactForm extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];



        if ($datas['shortcode']) {
            $this->datas['shortcode'] = $datas['shortcode'];
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) {
            $this->view->show('contact.form', $datas);
        }
    }
}