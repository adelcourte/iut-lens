<?php
    $title = \get_field('_hp_speech_title');
    $subtitle = \get_field('_hp_speech_subtitle');
    $content = \get_field('_hp_speech_content');
    $image_id = \get_field('_hp_speech_image_id');

    if(!empty($title)) {
        $title = $title;
    } else {
        $title = '';
    }

    if(!empty($subtitle)) {
        $subtitle = $subtitle;
    } else {
        $subtitle = '';
    }

    if(!empty($content)) {
        $content = $content;
    } else {
        $content = '';
    }

    if(!empty($image_id)) {
        $src = wp_get_attachment_image_url($image_id);
    } else {
        $src = '';
    }
?>
