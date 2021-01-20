<?php

class MVC {
    public function getDatas() {
        $title = \get_field('_hp_mvc_title');
        $content = \get_field('_hp_mvc_content');
        $ess = \get_field('_hp_mvc_ess');
    
        $datas = [
            'title'     => $title ? $title : '',
            'content'   => $content ? $content : '',
            'ess'       => $ess ? $ess : '',
        ];

        return $datas;
    }
}