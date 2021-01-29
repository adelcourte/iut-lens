<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\Hero as Model;
use WPMVC\MVC\Controller;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class Hero extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];


        
        if (!empty($datas['type'])) {
            $this->datas['type'] = $datas['type'];
        }
        
        if (!empty($datas['uptitle'])) {
            $this->datas['uptitle'] = $datas['uptitle'];
        }
        
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

        if (!empty($datas['link_vid'])) {
            $this->datas['link_vid_url'] = $datas['link_vid']['url'];
            $this->datas['link_vid_target'] = $datas['link_vid']['target'];
            $this->datas['link_vid_title'] = $datas['link_vid']['title'];
        }

        $this->datas['images_src'] = [];
    
        if ($ids = $datas['images_ids']) {
            foreach ($ids as $id) {
                $this->datas['images_src'][] = \wp_get_attachment_url($id);
            }
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            switch($datas['type']) {
                case 'homepage':
                    return $this->view->show('heroes.hero-home', $datas);
                    break;
                default:
                    return '';
                    break;
            }
        endif;
    }
}