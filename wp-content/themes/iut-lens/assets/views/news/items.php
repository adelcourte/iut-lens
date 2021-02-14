<?php
/**
 * news.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="pgv-5 bg-gray_lighter full-width">
    <div class="row align-spacebetween-stretch">
        <?php if(!empty($title)) : ?>
            <div class="column-12 mgb-5">
                <span class="title--big text-center"><?=$title; ?></span>
            </div>
        <?php endif; ?>
        <?php if($news->have_posts()) : ?>
            <?php while($news->have_posts()) : ?>
                <?php $news->the_post(); ?>
                <div class="column-4">
                    <div class="size-100 pgb-50-percent content-empty" style="background: white url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover">
                    </div>
                    <div class="size-100 height-20 bg-white">
                        <div class="pg-2 height-20 flex layout-column align-spacebetween-start">
                            <span class="fz-14 text-gray mgb-0_25"><?=get_the_date(); ?></span>
                            <span class="title--small--bold mgb-1"><?=get_the_title(); ?></span>
                            <p class="mgb-2"><?=get_the_excerpt(); ?></p>
                            <a href="<?php get_post_permalink(); ?>" class="link-arrow--blue mgt-auto size-fit">
                                <?=$link_single; ?>
                                <svg class="icon icon--blue">
                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php if(!empty($link_url)) : ?>
            <div class="column-4 align-center-center">
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="link-round link-round--blue">
                    <div class="link-round__content">
                        <span class="mgb-0_5"><?=$link_title; ?></span>
                        <svg class="icon--big icon--white">
                            <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow"></use>
                        </svg>
                    </div>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>