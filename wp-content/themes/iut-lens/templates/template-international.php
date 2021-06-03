<?php
/**
 * Template Name: International
 * Template Post Type: page
 *
 * @package WordPress
 *
 */
get_header();
?>





    <?php
        $title = \get_field('_int_hero_title');
        $content = \get_field('_int_hero_content');
    ?>

    <section class="mgt-12_5">
        <div class="row align-spacebetween-start mgb-3_5">
            <div class="column-4">
                <?php if(!empty($title)) : ?>
                    <span class="title--extra"><?=$title; ?></span>
                <?php endif; ?>
            </div>
            <div class="column-7">
                <?php if(!empty($content)) : ?>
                    <div class="content">
                        <?=$content; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer();