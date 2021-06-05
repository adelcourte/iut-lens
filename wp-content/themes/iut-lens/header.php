<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script src="<?=get_template_directory_uri().'/node_modules/rellax/rellax.min.js'; ?>"></script>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
	<body>
        <div class="progress-bar">
            <div  id="progress_bar_advance" class="progress-bar__advance"></div>
        </div>

        <nav class="main-menu p-relative">
            <div class="row sizz-100">
                <div class="column-12 layout-row align-spacebetween-center">
                    <a href="<?=home_url(); ?>">Accueil</a>
                    <div class="main-menu__links">
                        <?php
                            $links = get_field('_menu_links', 'option');
                            if(!empty($links)) {
                                foreach($links as $link) {
                                    if($link['dropdown'] == true) {
                                        ?>
                                        <div class="main-menu__links__dropdown">
                                            <span class="link-arrow--down">
                                                <?=$link['title']; ?>
                                                <svg class="icon icon--black">
                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-down"></use>
                                                </svg>
                                            </span>
                                            <div class="main-menu__links__dropdown__items">
                                                <div class="row">
                                                    <div class="column-12">
                                                        <?php foreach($link['dropdown_links'] as $item) : ?>
                                                            <div class="main-menu__links__dropdown__items__iut">
                                                                <a href="<?=esc_url($item['link']['url']); ?>"><?=$item['link']['title']; ?></a>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    } 
                                }
                            }
                        ?>
                        <div class="main-menu__links__dropdown">
                            <span class="link-arrow--down">
                                Formations
                                <svg class="icon icon--black">
                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-down"></use>
                                </svg>
                            </span>
                            <div class="main-menu__links__dropdown__items">
                                <div class="row">
                                    <div class="column-12">
                                        <?php
                                            $terms = get_terms([
                                                'taxonomy'      => 'department',
                                                'hide_empty'    => false,
                                            ]);
                                        ?>
                                        <?php foreach($terms as $term) : ?>
                                            <?php
                                                $color = get_field('_dpt_color', 'department_' . $term->term_id)
                                            ?>
                                            <div class="main-menu__links__dropdown__items__course">
                                                <a href="<?=esc_url(get_term_link($term->term_id)); ?>">
                                                    <div class="field-circles field-circles--small p-absolute left-0 transY-50">
                                                        <div class="field-circles__color" style="background-color: <?=$color; ?>"></div>
                                                        <div class="field-circles__blue"></div>
                                                    </div>
                                                    <?=$term->name; ?>
                                                </a>
                                                <div class="main-menu__links__dropdown__items__course__menu">
                                                    <?php

                                                        $courses = new WP_Query([
                                                            'post_type'     => 'course',
                                                            'status'        => 'publish',
                                                        ]);

                                                        $current_term_id = $term->term_id;
                                            
                                                        while($courses->have_posts()) {
                                                            $courses->the_post();
                                            
                                                            $term_data = wp_get_post_terms( get_the_ID(), 'department');
                                                            $term_id = $term_data[0]->term_id;
                                            
                                                            if($current_term_id == $term_id) {
                                                                $link_url = get_the_permalink();
                                                                $link_title = get_field('_course_infos_title_short', get_the_ID());
                                                                $type = get_field('_course_infos_type', get_the_ID());
                                                                ?>
                                                                    <?php if($type['value'] == 'but') : ?>
                                                                        <a href="<?=$link_url; ?>" class="link-arrow--blue fz-18">
                                                                            <span><?=$link_title; ?></span>
                                                                            <svg class="icon icon--blue">
                                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-small"></use>
                                                                            </svg>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                <?php
                                                            }
                                                        }
                                            
                                                        while($courses->have_posts()) {
                                                            $courses->the_post();
                                            
                                                            $term_data = wp_get_post_terms( get_the_ID(), 'department');
                                                            $term_id = $term_data[0]->term_id;
                                            
                                                            if($current_term_id == $term_id) {
                                                                $link_url = get_the_permalink();
                                                                $link_title = get_field('_course_infos_title_short', get_the_ID());
                                                                $type = get_field('_course_infos_type', get_the_ID());
                                                                ?>
                                                                    <?php if($type['value'] == 'lp') : ?>
                                                                        <a href="<?=$link_url; ?>" class="link-arrow--blue fz-18">
                                                                            <span><?=$link_title; ?></span>
                                                                            <svg class="icon icon--blue">
                                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-small"></use>
                                                                            </svg>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                <?php
                                                            }
                                                        }
                                            
                                                        while($courses->have_posts()) {
                                                            $courses->the_post();
                                            
                                                            $term_data = wp_get_post_terms( get_the_ID(), 'department');
                                                            $term_id = $term_data[0]->term_id;
                                            
                                                            if($current_term_id == $term_id) {
                                                                $link_url = get_the_permalink();
                                                                $link_title = get_field('_course_infos_title_short', get_the_ID());
                                                                $type = get_field('_course_infos_type', get_the_ID());
                                                                ?>
                                                                    <?php if($type['value'] == 'du') : ?>
                                                                        <a href="<?=$link_url; ?>" class="link-arrow--blue fz-18 size-fit">
                                                                            <span><?=$link_title; ?></span>
                                                                            <svg class="icon icon--blue">
                                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-small"></use>
                                                                            </svg>
                                                                        </a>
                                                                    <?php endif; ?>
                                                                <?php
                                                            }
                                                        }

                                                        wp_reset_postdata();

                                                    ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="flex layout-column pgt-2 pgb-4">
                                            <span class="text-gray mgb-0_25">Découvrez aussi</span>
                                            <a href="<?=get_site_url(); ?>/alternance-formation-continue" class="fw-700 hvr-text-blue">Alternance/Formation continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?=home_url(); ?>/candidater" class="main-menu__links__single link-black">Candidater</a>
                    </div>
                    <a href="<?=get_site_url(); ?>/contact" class="button--blue--small">Contact</a>
                </div>
            </div>
        </nav>
    </nav>

    <main>