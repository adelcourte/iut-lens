<?php
    $title = \get_field('_hp_others_title');
    $categories = \get_field('_hp_others_categories');

    if(!empty($title)) {
        $title = $title;
    } else {
        $title = '';
    }

    if(!empty($categories)) {
        $categories = $categories;
    } else {
        $categories = '';
    }
?>
