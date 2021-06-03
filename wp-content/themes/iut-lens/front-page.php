<?php get_header() ?>





    <?php
        $uptitle = \get_field('_hp_hero_uptitle');
        $title = \get_field('_hp_hero_title');
        $content = \get_field('_hp_hero_content');
        $vid_src = \get_field('_hp_hero_link');
        $images_ids = \get_field('_hp_hero_images_ids');

        $images_src = [];

        foreach($images_ids as $id) {
            $images_src[] = \wp_get_attachment_url($id);
        }
    ?>

    <section class="mgt-5 mgb-0">
        <div class="row align-center-center p-relative z-50 pgt-7_5 pgb-15">
            <div class="column-12 md-column-7 align-center-center text-center">
                <?php if(!empty($uptitle)) : ?>
                    <h1 class="title--gradient mgb-0_5"><?=$uptitle; ?></h1>
                <?php endif; ?>
                <?php if(!empty($title)) : ?>
                    <span class="title--huge mgb-1"><?=$title; ?></span>
                <?php endif; ?>
                <?php if(!empty($content)) : ?>
                    <p class="mgb-1_5"><?=$content; ?></p>
                <?php endif; ?>
                <div class="flex">
                    <a href="#courses" class="button--blue">En savoir plus</a>
                    <?php if(!empty($vid_src)) : ?>
                        <span id="video_popup_button" class="button--gray mgl-1">Voir la vidéo</span>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($images_src[0]) : ?>
                <div class="pg-5 content-empty p-absolute left-0 top-7_5 radius-tl-65 rellax z-25" data-rellax-speed="-3" style="background: #3CC8DB url('<?=$images_src[0]; ?>') no-repeat bottom/cover;"></div>
            <?php endif; ?>
            <?php if($images_src[1]) : ?>
                <div class="pg-5 content-empty p-absolute right-2_5 top-2_5 radius-50 rellax z-25" data-rellax-speed="2" style="background: #FD9F42 url('<?=$images_src[1]; ?>') no-repeat bottom/cover;"></div>
            <?php endif; ?>
            <?php if($images_src[2]) : ?>
                <div class="pg-5 content-empty p-absolute right-0 bottom-10 radius-br-65 rellax z-25" data-rellax-speed="-1" style="background: #F0548B url('<?=$images_src[2]; ?>') no-repeat bottom/cover;"></div>
            <?php endif; ?>
        </div>
    </section>

    <?php if(!empty($vid_src)) : ?>
        <iframe src="<?=$vid_src; ?>" class="video_popup" id="video_popup"></iframe>
        <div id="video_dark_overlay"></div>
    <?php endif; ?>





    <?php
        $terms = get_terms([
            'taxonomy'   => 'department',
            'hide_empty' => false,
        ]);

        $title = \get_field('_hp_dpt_title');
        $content = \get_field('_hp_dpt_content');
        $link = \get_field('_hp_dpt_link');
        $terms = $terms;

        if (!empty($link)) {
            $link_url = $link['url'];
            $link_target = $link['target'];
            $link_title = $link['title'];
        }

        $departments = [];
        if($terms) :
            foreach($terms as $term) :
                $departments[] = [
                    'color'     => get_field('_dpt_color', $term->taxonomy.'_'.$term->term_id),
                    'diplomas'  => get_field('_dpt_diplomas', $term->taxonomy.'_'.$term->term_id),
                    'title'     => $term->name,
                    'content'   => $term->description,
                    'link_url'  => get_term_link($term),
                ];
            endforeach;
        endif;
    ?>

    <section>
        <div class="row align-spacebetween-start p-relative z-50">
            <div class="column-12 md-column-4 mgt-1_5 mgb-2_5 md-mgb-0">
                <?php if(!empty($title)) : ?>
                    <span class="title--big mgb-0_75"><?=$title; ?></span>
                <?php endif; ?>
                <?php if(!empty($content)) : ?>
                    <p class="mgb-1_5"><?=$content; ?></p>
                <?php endif; ?>
                <?php if(!empty($link_url)) : ?>
                    <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button--blue"><?=$link_title; ?></a>
                <?php endif; ?>
            </div>
            <?php if(!empty($departments)) : ?>
                <div class="column-12 md-column-8 layout-row layout-wrap align-spacebetween-stretch">
                    <?php foreach($departments as $dpt) : ?>
                        <div class="card-dpt size-100 md-size-45">
                            <div class="field-circles mgb-2">
                                <div class="field-circles__color" style="background-color: <?=$dpt['color']; ?>"></div>
                                <div class="field-circles__blue"></div>
                            </div>
                            <?php if(!empty($dpt['title'])) : ?>
                                <?php if(!empty($dpt['link_url'])) : ?>
                                    <a href="<?=$dpt['link_url']; ?>">
                                        <h2 class="title mgb-1"><?=$dpt['title']; ?></h2>
                                    </a>
                                <?php else : ?>
                                    <h2 class="title mgb-1"><?=$dpt['title']; ?></h2>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if(!empty($dpt['content'])) : ?>
                                <p class="text-center mgb-3"><?=$dpt['content']; ?></p>
                            <?php endif; ?>
                            <?php if(!empty($dpt['link_url'])) : ?>
                                <span data-fl="<?=base64_encode(esc_url($dpt['link_url'])); ?>" class="link-arrow--blue mgt-auto">
                                    <span>Découvrir</span>
                                    <svg class="icon icon--blue">
                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-small"></use>
                                    </svg>
                                </span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>





    <?php
        $title = \get_field('_news_title', 'option');
        $posts_ids = \get_field('_news_posts_ids', 'option');      
        $link_single = \get_field('_news_link_single', 'option');
        $link = \get_field('_news_link', 'option');

        if (!empty($link)) {
            $link_url = $link['url'];
            $link_target = $link['target'];
            $link_title = $link['title'];
        }

        if(!empty($posts_ids)) {
            $news = new WP_Query([
                'posts_per_page'    => 3,
                'post_type'         => 'post',
                'status'            => 'publish',
                'order_by'          => 'date',
                'order'             => 'DESC',
                'post__in'          => $posts_ids,
            ]);
        }
    ?>
    
    <section class="pgv-6 bg-gray_lighter full-width">
        <div class="row align-spacebetween-stretch">
            <?php if(!empty($title)) : ?>
                <div class="column-12 mgb-2_5">
                    <span class="title--big text-center"><?=$title; ?></span>
                </div>
            <?php endif; ?>
            <?php if($news->have_posts()) : ?>
                <?php while($news->have_posts()) : ?>
                    <?php $news->the_post(); ?>
                    <div class="column-4">
                        <div class="size-100 pgb-50-percent content-empty" style="background: white url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover">
                        </div>
                        <div class="size-100 height-20 bg-white card-article">
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
            <?php endif; ?>
            <?php if(!empty($link_url)) : ?>
                <div class="column-12 align-center-center mgt-3_5">
                    <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button--blue"><?=$link_title; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </section>





    <?php
        $ctas = \get_field('_hp_cta_list');
    ?>

    <section>
        <div class="row">
            <?php if(!empty($ctas)) : ?>
                <?php foreach($ctas as $cta) : ?>
                    <div class="column-6">
                        <div class="pgv-4 pgh-3 radius-1-rem bg-gray_lighter flex layout-column align-center-center p-relative">
                            <?php if($title = $cta['title']) : ?>
                                <div class="title--big mgb-1_5"><?=$title; ?></div>
                            <?php endif; ?>
                            <?php if($content = $cta['content']) : ?>
                                <p class="mgb-3 text-center"><?=$content; ?></p>
                            <?php endif; ?>
                            <?php if($cta_type = $cta['cta_type']) : ?>
                                <?php if($cta_type == 'link') : ?>
                                    <a href="<?=$link['url']; ?>" target="<?=$link['target']; ?>" class="button--white--hvr_blue"><?=$link['title']; ?></a>
                                <?php else : ?>
                                    <a href="<?=wp_get_attachment_url($cta['doc_id']) ?>" target="blank" class="button--white--hvr_blue"><?=$cta['button_title']; ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if($ctas[0] == $cta) : ?>
                                <div class="content-empty pg-2 bg-pink radius-tl-50 size-fit p-absolute left-minus-2 top-1_5"></div>
                            <?php else : ?>
                                <div class="content-empty pg-2 bg-aqua radius-br-100 size-fit p-absolute top-3 right-minus-2"></div>
                                <div class="content-empty pgh-3 pgv-1_5 bg-purple radius-br-6-rem radius-bl-6-rem size-fit p-absolute left-2 bottom-minus-2"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>





<?php get_footer() ?>