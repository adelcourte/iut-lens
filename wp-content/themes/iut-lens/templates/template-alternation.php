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

    <section class="pgt-7_5"></section>

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
                        $specs_list = get_field('_course_specs_list', $id);
                        $specs = [];
                        $type = get_field('_course_infos_type', $id)['value'];
                        
                        if(!empty($specs_list)) {
                            foreach($specs_list as $spec) {
                                $specs[] = [
                                    'title'             => $spec['title'],
                                    'initial'           => $spec['offer']['initial'],
                                    'apprenticeship'    => $spec['offer']['apprenticeship'],
                                    'professionalship'  => $spec['offer']['professionalship'],
                                    'continual'         => $spec['offer']['continual'],
                                ];
                            }
                        }

                        $courses[] = [
                            'id'        => $id,
                            'title'     => $title,
                            'specs'     => $specs,
                            'type'      => $type,
                        ];
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
        <div class="row">
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
                                            <?php if(!empty($course['specs'])) : ?>
                                                <?php $course_title = true; ?>
                                                <?php foreach($course['specs'] as $spec) : ?>
                                                    <div class="flex layout-row align-center-spacebetween pgv-0_75 bdt-1-gray_extralight">
                                                        <div class="flex size-14">
                                                            <?php if(!empty($course['title']) && $course_title == true) : ?>
                                                                <span class="title--small"><?=$course['title']; ?></span>
                                                                <?php $course_title = false; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="size-30 mgr-1">
                                                            <?php if(!empty($spec['title'])) : ?>
                                                                <span class="title--smaller"><?=$spec['title']; ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['initial'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['apprenticeship'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['professionalship'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['continual'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <div class="flex layout-row align-center-spacebetween pgv-0_75 bdt-1-gray_extralight">
                                                    <div class="flex size-14">
                                                        <?php if(!empty($course['title'])) : ?>
                                                            <span class="title--small"><?=$course['title']; ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="size-30 mgr-1">
                                                    </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['initial'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['apprenticeship'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['professionalship'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex size-14 align-center-center text-center">
                                                            <?php if($spec['continual'] == true) : ?>
                                                                <svg class="icon">
                                                                    <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-check"></use>
                                                                </svg>
                                                            <?php endif; ?>
                                                        </div>
                                                </div>
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
get_footer();