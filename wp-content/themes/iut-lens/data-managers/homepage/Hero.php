<?php
    // Get data from BackOffice
    $uptitle = \get_field('_hp_hero_uptitle');
    $title = \get_field('_hp_hero_title');
    $content = \get_field('_hp_hero_content');
    $link = \get_field('_hp_hero_link');
    $link_news = \get_field('_hp_hero_link_news');
    $link_video = \get_field('_hp_hero_link_video');
    $image_id = \get_field('_hp_hero_image_id');

    // Adjusting datas
    if(!empty($uptitle)) {
        $uptitle = $uptitle;
    } else {
        $uptitle = '';
    }

    if(!empty($title)) {
        $title = $title;
    } else {
        $title = '';
    }

    if(!empty($content)) {
        $content = $content;
    } else {
        $content = '';
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

    if(!empty($link_video)) {
        $link_video_url = $link_video['url'];
        $link_video_title = $link_video['title'];
        $link_video_target = $link_video['target'];
    } else {
        $link_video_url = '';
        $link_video_title = '';
        $link_video_target = '';
    }

    if(!empty($image_id)) {
        $src = wp_get_attachment_image_url($image_id);
    } else {
        $src = '';
    }

    // Turn modified data into array
    $datas = [
        'uptitle' => $uptitle,
        'title' => $title,
        'content' => $content,

        'link_url' => $link_url,
        'link_title' => $link_title,
        'link_target' => $link_target,

        'link_video_url' => $link_video_url,
        'link_video_title' => $link_video_title,
        'link_video_target' => $link_video_target,

        'src' => $src,
    ];
?>