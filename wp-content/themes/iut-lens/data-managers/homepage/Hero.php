<?php
    // Get data from BackOffice
    $title = get_field('_header_title');
    $subtitle = get_field('_header_subtitle');
    $background_id = get_field('_header_background_id');
    $overlay_id = get_field('_header_overlay_id');

    // Adjusting datas
    if($background_id) {
        $bg_src = wp_get_attachment_url($background_id);
    } else {
        $bg_src = '';
    }

    if($overlay_id) {
        $ovl_src = wp_get_attachment_url($overlay_id);
    } else {
        $ovl_src = '';
    }
?>