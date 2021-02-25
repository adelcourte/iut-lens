<?php

namespace IUT_Lens\Controllers;

use IUT_Lens\Models\News as Model;
use WPMVC\MVC\Controller;
use WP_Query;

/**
 * HpSpeech
 * WordPress MVC controller.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class News extends Controller
{
    public function init(){
        $model = new Model;
        $datas = $model->getDatas();
        $this->datas = [];
        


        if (!empty($datas['title'])) {
            $this->datas['title'] = $datas['title'];
        }
        
        if (!empty($datas['link_single'])) {
            $this->datas['link_single'] = $datas['link_single'];
        }

        if (!empty($datas['link'])) {
            $this->datas['link_url'] = $datas['link']['url'];
            $this->datas['link_target'] = $datas['link']['target'];
            $this->datas['link_title'] = $datas['link']['title'];
        }

        if(!empty($datas['posts_ids'])) {
            $this->datas['news'] = new WP_Query([
                'posts_per_page'    => 3,
                'post_type'         => 'post',
                'status'            => 'publish',
                'order_by'          => 'date',
                'order'             => 'DESC',
                'post__in'          => $datas['posts_ids'],
            ]);
        }

        $this->render($this->datas);
    }

    public function render($datas){
        if(!empty($datas)) :
            $this->view->show('news.items', $datas);
        endif;
    }
}