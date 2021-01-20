<?php

namespace IUT_Lens\Controllers;

use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class HpSpeech extends Controller
{
    public function init(){
        $this->add_model('HpSpeech');
    }

    public function render(){
        $this->view->show( 'homepage.speech' );
    }
}