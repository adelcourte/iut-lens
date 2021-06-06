<?php get_header() ?>





<?php
    $posts = new WP_Query([
        'status'            => 'publish',
        'post_type'         => 'article',
        'posts_per_page'    => 12
    ]);

    var_dump($posts);
?>





<?php get_footer() ?>