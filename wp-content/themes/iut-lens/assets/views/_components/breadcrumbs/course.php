<?php

    $id = \get_the_ID();

    if($dpt = wp_get_post_terms($id, 'department')) {
        $dpt_color = get_field('_dpt_color', $dpt[0]->taxonomy.'_'.$dpt[0]->term_id);
        $dpt_name = $dpt[0]->name;
        $dpt_url = get_term_link($dpt[0]);
    }

    $course_name = get_the_title(get_the_ID());

?>

<span class="breadcrumbs">
    <a href="<?=home_url(); ?>"><?php _e('IUT de Lens', 'iut_lens'); ?></a>
    <?php if(!empty($dpt_url)) : ?>
        <a href="<?=esc_url($dpt_url); ?>"><?=$dpt_name; ?></a>
    <?php endif; ?>
    <?php if(!empty($course_name)) : ?>
        <?=$course_name; ?>
    <?php endif; ?>
</span>