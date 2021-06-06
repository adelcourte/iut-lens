<?php get_header() ?>





    <?php
        $title = \get_field('_news_hero_title');
        $content = \get_field('_news_hero_content');
    ?>

    <section class="mgt-7_5">
        <div class="row align-center-center">
            <div class="column-6">
                <?php if(!empty($title)) : ?>
                    <h1 class="title--huge text-center mgb-1"><?=$title; ?></h1>
                <?php endif; ?>
                <?php if(!empty($content)) : ?>
                    <p class="text-center"><?=$content; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <?php
        $number = 0;
        if($posts_number = \get_field('_news_posts_number')) {
            $number = $posts_number;
        } else {
            $number = -1;
        }

        $posts = new WP_Query([
            'status'            => 'publish',
            'post_type'         => 'post',
            'posts_per_page'    => $number,
            'order_by'          => 'date',
            'order'             => 'DESC',
        ]);

        $link_single = \get_field('_news_link_single', 'option');
    ?>

    <?php if($posts->have_posts()) : ?>
        <section>
            <div class="row">
                <?php while($posts->have_posts()) : ?>
                    <?php $posts->the_post(); ?>
                    <div class="column-4">
                        <div class="size-100 pgb-50-percent content-empty radius-tl-1-rem radius-tr-1-rem ovf-hidden" style="background: white url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover">
                        </div>
                        <div class="size-100 height-20 bg-gray_lighter card-article">
                            <div class="pg-2 height-20 flex layout-column align-spacebetween-start">
                                <span class="fz-14 text-gray mgb-0_25"><?=get_the_date(); ?></span>
                                <a href="<?=get_the_permalink(); ?>"><span class="title mgb-1"><?=get_the_title(); ?></span></a>
                                <p class="mgb-2"><?=get_the_excerpt(); ?></p>
                                <span data-fl="<?=base64_encode(esc_url(get_the_permalink())); ?>" class="link-arrow--blue mgt-auto size-fit">
                                    <span><?=$link_single; ?></span>
                                    <svg class="icon icon--blue">
                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-small"></use>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    <?php endif; ?>





<?php get_footer() ?>