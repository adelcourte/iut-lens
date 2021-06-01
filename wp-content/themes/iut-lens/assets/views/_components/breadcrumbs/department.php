<?php

    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

    $name = $term->name;
    $url = get_term_link($term->term_id);

?>

<span class="breadcrumbs">
    <a href="<?=home_url(); ?>"><?php _e('IUT de Lens', 'iut_lens'); ?></a>
    <?php if(!empty($url)) : ?>
        <?=$name; ?>
    <?php endif; ?>
</span>