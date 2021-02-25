<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\Banner as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class Banner extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];


        
        if (!empty($datas['check'])) {
            $this->datas['check'] = $datas['check'];
        }
        
        if (!empty($datas['type'])) {
            $this->datas['type'] = $datas['type'];
        }
        
        if (!empty($datas['title'])) {
            $this->datas['title'] = $datas['title'];
        }

        if (!empty($datas['link'])) {
            $this->datas['link_url'] = $datas['link']['url'];
            $this->datas['link_target'] = $datas['link']['target'];
            $this->datas['link_title'] = $datas['link']['title'];
        }
        
        if (!empty($datas['link_title'])) {
            $this->datas['link_title'] = $datas['link_title'];
        }
        
        if (!empty($datas['file_id'])) {
            $this->datas['file_src'] = wp_get_attachment_url($datas['file_id']);
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            if($datas['check'] == true) :
                switch($datas['type']) {
                    case 'file' :
                        return $this->view->show('banners.banner-file', $datas);
                        break;
                    case 'link' :
                        return $this->view->show('banners.banner-link', $datas);
                        break;
                }
            endif;
        endif;
    }
}