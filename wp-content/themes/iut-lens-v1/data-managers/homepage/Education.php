<?php
    $title = \get_field('_hp_ed_title');
    $fields = \get_field('_hp_ed_fields');
    $link = \get_field('_hp_ed_link');

    if(!empty($title)) {
        $title = $title;
    } else {
        $title = '';
    }

    if(!empty($fields)) {
        $fields = $fields;
    } else {
        $fields = '';
    }

    if(!empty($link)) {
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'];
    } else {
        $link_url = '';
        $link_title = '';
        $link_target = '';
    }
?>
