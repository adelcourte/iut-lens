<?php
    $logo_id = \get_field('_menu_logo_id', 'option');
    $links = \get_field('_menu_links', 'option');
    $link = \get_field('_menu_apply', 'option');

    if(!empty($logo_id)) {
        $src = wp_get_attachment_image_url($logo_id);
    } else {
        $src = '';
    }

    if(!empty($title)) {
        $title = $title;
    } else {
        $title = '';
    }

    if(!empty($links)) {
        $links = $links;
    } else {
        $links = '';
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
