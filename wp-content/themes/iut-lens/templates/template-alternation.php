<?php
/**
 * Template Name: Alternance
 * Template Post Type: page
 *
 * @package WordPress
 *
 */
get_header();
?>





    <?php
        $title = \get_field('_alt_hero_title');
    ?>

    <section class="mgt-12_5">
        <?php if(!empty($title)) :?>
            <div class="row align-center-center">
                <div class="column-7">
                    <h1 class="title--huge text-center"><?=$title; ?></h1>
                </div>
            </div>
        <?php endif; ?>
    </section>





    <?php
        $title = \get_field('_alt_fcu_title');
        $content = \get_field('_alt_fcu_content');
        $essentials = \get_field('_alt_fcu_essentials');
    ?>

    <section>
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
        <div class="row">
            <?php if(!empty($essentials)) : ?>
                <?php foreach($essentials as $ess) : ?>
                    <div class="column-4 height-auto">
                        <div class="pg-1_5 radius-1-rem bg-gray_lighter flex layout-column height-20">
                            <span class="title--extra text-blue mgb-0_5"><?=$ess['number']; ?></span>
                            <span class="title--small mgb-1"><?=$ess['title']; ?></span>
                            <p class="small"><?=$ess['content']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>





    <?php
        $title = \get_field('_alt_contracts_title');
        $content = \get_field('_alt_contracts_content');
        $vs = \get_field('_alt_contracts_vs');
    ?>

    <section class="pgv-6 bg-gray_lighter">
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
        <?php if(!empty($vs)) : ?>
            <div class="row">
                <div class="column-12">
                    <div class="flex align-spacebetween-start pgb-0_75">
                        <div class="size-25"></div>
                        <div class="size-35">
                            <span class="title--smaller">Contrat d'apprentissage</span>
                        </div>
                        <div class="size-35">
                            <span class="title--smaller">Contrat de professionnalisation</span>
                        </div>
                    </div>
                    <?php foreach($vs as $item) : ?>
                        <div class="flex align-spacebetween-start pgv-0_75 bdt-1-gray_semilight">
                            <div class="size-25">
                                <span><?=$item['title']; ?></span>
                            </div>
                            <div class="size-35">
                                <p class="small"><?=$item['apprenticeship']; ?></p>
                            </div>
                            <div class="size-35">
                                <p class="small"><?=$item['professionalship']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>





    <?php
        $terms = get_terms([
            'taxonomy'   => 'department',
            'hide_empty' => false,
        ]);

        $departments = [];

        if (!empty($terms)) {
            foreach($terms as $term) {
                $courses_posts = get_posts(array(
                    'showposts' => -1,
                    'post_type' => 'course',
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'department',
                            'field'     => 'term_id',
                            'terms'     => $term->term_id,
                        )
                    )
                ));

                $courses = [];

                if(!empty($courses_posts)) {
                    foreach($courses_posts as $course) {
                        $id = $course->ID;
                        $title = $course->post_title;
                        $type = get_field('_course_infos_type', $id)['value'];
                        
                        if($type != 'but') {
                            $specs = get_field('_course_infos_alt', $id);
                            
                            $courses[] = [
                                'id'        => $id,
                                'title'     => $title,
                                'specs'     => $specs,
                                'type'      => $type,
                            ];
                        } else {
                            $paths = [];
                            $paths_data = get_field('_course_infos_paths', $id);

                            if(!empty($paths_data)) {
                                foreach($paths_data as $path) {
                                    $paths[] = [
                                        'title' => $path['title'],
                                        'specs' => $path['alt'],
                                    ];
                                }
                            }
                            
                            $courses[] = [
                                'id'        => $id,
                                'title'     => $title,
                                'paths'     => $paths,
                                'type'      => $type,
                            ];
                        }
                    }
                }

                $courses_ordered = [];

                foreach($courses as $course) {
                    if($course['type'] == 'but') {
                        $courses_ordered[] = $course;
                    }
                }

                foreach($courses as $course) {
                    if($course['type'] == 'lp') {
                        $courses_ordered[] = $course;
                    }
                }

                foreach($courses as $course) {
                    if($course['type'] == 'du') {
                        $courses_ordered[] = $course;
                    }
                }

                $departments[] = [
                    'title'     => $term->name,
                    'courses'   => $courses_ordered,
                ];
            }
        }
    ?>

    <section>
        <div class="row align-center-center pgb-2_5">
            <div class="column-6 mgb-3_5">
                <div class="title--extra text-center">Formations disponibles en alternance</div>
            </div>
            <div class="column-12">
                <?php if(!empty($departments)) : ?>
                    <div class="carousel">
                        <div class="carousel__header">
                            <?php foreach($departments as $dpt) : ?>
                                <span class="carousel__header__link <?php if($dpt == $departments[0]) : ?> active <?php endif; ?>" data-cat="<?=$dpt['title']; ?>"><?=$dpt['title']; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="carousel__slides size-100">
                            <?php foreach($departments as $dpt) : ?>
                                <div class="carousel__slides__slide <?php if($dpt == $departments[0]) : ?> visible <?php endif; ?>" data-cat="<?=$dpt['title']; ?>">
                                    <?php if(!empty($dpt['courses'])) : ?>
                                        <div class="flex layout-row align-center-spacebetween pgb-0_75">
                                            <div class="size-44 mgr-1">
                                                <span class="text-gray_dark">Intitulé de la formation</span>
                                            </div>
                                            <div class="flex size-14 align-center-center text-center">
                                                <span class="text-gray_dark">Formation initiale</span>
                                            </div>
                                            <div class="flex size-14 align-center-center text-center">
                                                <span class="text-gray_dark">Contrat d'appr.</span>
                                            </div>
                                            <div class="flex size-14 align-center-center text-center">
                                                <span class="text-gray_dark">Contrat pro.</span>
                                            </div>
                                            <div class="flex size-14 align-center-center text-center">
                                                <span class="text-gray_dark">Formation continue</span>
                                            </div>
                                        </div>
                                        <?php foreach($dpt['courses'] as $course) : ?>
                                            <?php if($course['type'] != 'but') : ?>
                                                <?php $specs = $course['specs']; ?>
                                                <div class="flex layout-row align-center-spacebetween pgv-0_75 bdt-1-gray_extralight">
                                                    <div class="flex size-15">
                                                        <?php if(!empty($course['title'])) : ?>
                                                            <span class="title--small"><?=$course['title']; ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="size-29 mgr-1">
                                                    </div>
                                                    <div class="flex size-14 align-center-center text-center">
                                                        <?php if($specs['initial'] == true) : ?>
                                                            <svg class="icon">
                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="flex size-14 align-center-center text-center">
                                                        <?php if($specs['apprenticeship'] == true) : ?>
                                                            <svg class="icon">
                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="flex size-14 align-center-center text-center">
                                                        <?php if($specs['professionalship'] == true) : ?>
                                                            <svg class="icon">
                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="flex size-14 align-center-center text-center">
                                                        <?php if($specs['continual'] == true) : ?>
                                                            <svg class="icon">
                                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <?php if(!empty($course['paths'])) : ?>
                                                    <?php foreach($course['paths'] as $path) : ?>
                                                        <?php $specs = $path['specs']; ?>
                                                        <?php $course_title = true; ?>
                                                        <div class="flex layout-row align-center-spacebetween pgv-0_75 bdt-1-gray_extralight">
                                                            <div class="flex size-15">
                                                                <?php if(!empty($course['title']) && $course_title == true) : ?>
                                                                    <span class="title--small"><?=$course['title']; ?></span>
                                                                    <?php $course_title = false; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="size-29 mgr-1">
                                                                <?php if(!empty($path['title'])) : ?>
                                                                    <span class="title--smaller"><?=$path['title']; ?></span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="flex size-14 align-center-center text-center">
                                                                <?php if($specs['initial'] == true) : ?>
                                                                    <svg class="icon">
                                                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="flex size-14 align-center-center text-center">
                                                                <?php if($specs['apprenticeship'] == true) : ?>
                                                                    <svg class="icon">
                                                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="flex size-14 align-center-center text-center">
                                                                <?php if($specs['professionalship'] == true) : ?>
                                                                    <svg class="icon">
                                                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="flex size-14 align-center-center text-center">
                                                                <?php if($specs['continual'] == true) : ?>
                                                                    <svg class="icon">
                                                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                    </svg>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
    </section>





    <?php
        $title = \get_field('_alt_continual_title');
        $content = \get_field('_alt_continual_content');
        $essentials = \get_field('_alt_continual_essentials');
    ?>

    <section>
        <div class="row align-spacebetween-start mgb-4_5">
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
        <div class="row">
            <div class="column-12">
                <?php if(!empty($essentials)) : ?>
                    <?php foreach($essentials as $item) : ?>
                        <div class="dropdown closed">
                            <div class="dropdown__header">
                                <span class="title"><?=$item['title']; ?></span>
                                <svg>
                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-down"></use>
                                </svg>
                            </div>
                            <?php if(!empty($item['content'])) : ?>
                                <div class="dropdown__content content">
                                    <?=$item['content']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
get_footer();