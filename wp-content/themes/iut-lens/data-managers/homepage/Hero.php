<?php

    // Get data from BackOffice
    $uptitle = \get_field('_hp_hero_uptitle');
    $title = \get_field('_hp_hero_title');
    $content = \get_field('_hp_hero_content');
    $link_ed = \get_field('_hp_hero_link_ed');
    $link_news = \get_field('_hp_hero_link_news');
    $link_vid = \get_field('_hp_hero_link_vid');
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

    if(!empty($link_ed)) {
        $link_ed_url = $link_ed['url'];
        $link_ed_title = $link_ed['title'];
        $link_ed_target = $link_ed['target'];
    } else {
        $link_ed_url = '';
        $link_ed_title = '';
        $link_ed_target = '';
    }

    if(!empty($link_ed)) {
        $link_news_url = $link_news['url'];
        $link_news_title = $link_news['title'];
        $link_news_target = $link_news['target'];
    } else {
        $link_news_url = '';
        $link_news_title = '';
        $link_news_target = '';
    }

    if(!empty($link_ed)) {
        $link_vid_url = $link_vid['url'];
        $link_vid_title = $link_vid['title'];
        $link_vid_target = $link_vid['target'];
    } else {
        $link_vid_url = '';
        $link_vid_title = '';
        $link_vid_target = '';
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

        'link_ed_url' => $link_ed_url,
        'link_ed_title' => $link_ed_title,
        'link_ed_target' => $link_ed_target,

        'link_news_url' => $link_news_url,
        'link_news_title' => $link_news_title,
        'link_news_target' => $link_news_target,

        'link_vid_url' => $link_vid_url,
        'link_vid_title' => $link_vid_title,
        'link_vid_target' => $link_vid_target,

        'src' => $src,
    ];

    var_dump($datas);
    
    include(get_template_directory().'/template-parts/homepage/hero.php');
?>