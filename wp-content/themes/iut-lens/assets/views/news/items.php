
<?php
/**
 * homepage.fileds.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="pgv-5 bg-gray_lighter">
    <div class="row align-spacebetween-stretch">
        <?php if($news->have_posts()) : ?>
            <?php while($news->have_posts()) : ?>
                <?php $news->the_post(); ?>
                <div class="column-4">
                    <div class="size-100 pgb-50-percent content-empty" style="background: white url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover">
                    </div>
                    <div class="size-100 height-20 bg-white">
                        <div class="pgv-1_5 pgh-2">
                            <span class="fz-14 text-gray mgb-0_25"><?=get_the_date(); ?></span>
                            <span class="title title--bold title--small mgb-0_75"><?=get_the_title(); ?></span>
                            <?=get_the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="column-4 align-center-center">
            <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="link-round link-round--blue">
                <div class="link-round__content">
                    <span><?=$link_title; ?></span>
                </div>
            </a>
        </div>
    </div>
</section>