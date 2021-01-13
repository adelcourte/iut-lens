<?php
    $title_1 = \get_field('_news_title_1', 'option');
    $title_2 = \get_field('_news_title_2', 'option');

    if(!empty($title_1)) {
        $title_1 = $title_1;
    } else {
        $title_1 = '';
    }

    if(!empty($title_2)) {
        $title_2 = $title_2;
    } else {
        $title_2 = '';
    }

    $args_latest = array(
        'post_type'         => 'post',
        'posts_per_page'    => 1,
        'status'            => 'published',
    );
    $latest = new WP_Query($args_latest);

    $args_news = array(
        'post_type'         => 'post',
        'posts_per_page'    => 4,
        'status'            => 'published',
        'offset'            => 1,
    );
    $news = new WP_Query($args_news);
?>