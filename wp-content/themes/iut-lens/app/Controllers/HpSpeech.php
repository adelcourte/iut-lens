<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\HpSpeech as Model;
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
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];


        
        if (!empty($datas['title'])) {
            $this->datas['title'] = $datas['title'];
        }

        if (!empty($datas['list'])) {
            $this->datas['list'] = $datas['list'];
        }

        $author = [];
        if ($user_id = $datas['author_id']) {
            $author_data = get_userdata($user_id);
            $author['firstname'] = $author_data->user_firstname;
            $author['lastname'] = $author_data->user_lastname;
            $author['job'] = $author_data->user_job;
            $author['src'] = get_avatar_url($user_id);
        }
        $this->datas['author'] = $author;

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('homepage.speech.items', $datas);
        endif;
    }
}