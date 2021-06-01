
<?php get_header() ?>





    <div id="side_nav" class="p-fixed top-7_5 z-50">
        <a href="#infos" class="title--smaller hvr-text-blue mgb-0_75">Présentation</a>
        <a href="#goals" class="title--smaller hvr-text-blue mgb-0_75">Objectifs</a>
        <a href="#skills" class="title--smaller hvr-text-blue mgb-0_75">Compétences</a>
        <a href="#jobs" class="title--smaller hvr-text-blue mgb-0_75">Débouchés</a>
        <a href="#projects" class="title--smaller hvr-text-blue mgb-0_75">Projets et stages</a>
        <a href="#access" class="title--smaller hvr-text-blue mgb-0_75">Conditions d'accès</a>
        <a href="#organisation" class="title--smaller hvr-text-blue mgb-0_75">Organisation</a>
        <a href="#program" class="title--smaller hvr-text-blue mgb-0_75">Programme</a>
    </div>





    <?php
        $id = \get_the_ID();

        $diploma   = \get_field('_course_infos_diploma', $id);
        $title     = \get_field('_course_infos_title', $id);
        $entry     = \get_field('_course_infos_entry', $id);
        $image_src  = \wp_get_attachment_url(\get_field('_course_infos_image_id', $id));
        $content   = \get_field('_course_infos_content', $id);

        if($dpt = wp_get_post_terms($id, 'department')) {
            $dpt_color = get_field('_dpt_color', $dpt[0]->taxonomy.'_'.$dpt[0]->term_id);
            $dpt_name = $dpt[0]->name;
            $dpt_url = get_term_link($dpt[0]);
        }

        $anchor_id = 'course_infos';
        $anchor_title = 'Introduction';

    ?>

    <section id="infos" class="mgh-auto pgt-7_5 mgb-2 md-mgb-4">
        <a id="<?=$anchor_id; ?>" class="anchor dp_none" data-title="<?=$anchor_title; ?>"></a>
        <div class="row align-end-center p-relative">
            <div class="column-8 mgb-2_5">
                <?php require_once(dirname( __FILE__ ) . '/assets/views/_components/breadcrumbs/course.php'); ?>
                <div class="flex align-start-center mgb-1">
                    <?php if($dpt_name) : ?>
                        <div class="field-circles field-circles--smaller mgr-0_5">
                            <div class="field-circles__color" style="background-color: <?=$dpt_color; ?>"></div>
                            <div class="field-circles__blue"></div>
                        </div>
                        <a href="<?=$dpt_url; ?>"><span class="title"><?=$dpt_name; ?></span></a>
                    <?php endif; ?>
                </div>
                <?php if($title) : ?>
                    <h1 class="title--huge"><?=$title; ?></h1>
                <?php endif; ?>
            </div>
            <?php if($image_src) : ?>
                <div class="column-8 pgb-2_5 p-relative">
                    <div class="size-100 pgb-50-percent content-empty" style="background: <?=$dpt_color; ?> url('<?=$image_src; ?>') no-repeat center/cover;"></div>
                    <div class="content-empty p-absolute bottom-0 right-minus-2_5 pg-5 radius-br-50 z-5" style="background: <?=$dpt_color; ?>"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_goals_content', $id);
    ?>

    <section id="goals" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Objectifs</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_skills_content', $id);
    ?>

    <section id="skills" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Compétences</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_jobs_content', $id);
        $jobs = \get_field('_course_jobs_list', $id);
    ?>

    <section id="jobs" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Débouchés</span>
                <div class="content">
                    <?=$content; ?>
                </div>
                <?php if(!empty($jobs)) : ?>
                    <div class="flex mgt-2 layout-wrap">
                        <?php foreach($jobs as $item) : ?>
                            <span class="pgv-0_75 pgh-1_5 radius-1-rem bg-gray_lighter size-fit mgr-1 mgb-1 title--smaller"><?=$item['title']; ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_projects_content', $id);
    ?>

    <section id="projects" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Projets et stages</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_access_content', $id);
    ?>

    <section id="access" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Conditions d'accès</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_organisation_content', $id);
    ?>

    <section id="organisation" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Organisation</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>





    <?php
        $id = \get_the_ID();

        $years = \get_field('_course_program_years', $id);
    ?>

    <section id="program" class="mgb-0 pgt-5">
        <div class="row align-end-start">
            <div class="column-8">
                <span class="title--extra mgb-2">Programme</span>
                <?php if(!empty($years)) : ?>
                    <?php foreach($years as $year) : ?>
                        <div class="mgb-2">
                            <span class="title--small text-blue pgb-0_25 mgb-1 size-fit bdb-2-blue"><?=$year['title']; ?></span>
                            <?php if(!empty($year['classes'])) : ?>
                                <?php foreach($year['classes'] as $class) : ?>
                                    <div class="dropdown closed">
                                        <div class="dropdown__header">
                                            <span class="title--small--bold"><?=$class['title']; ?></span>
                                            <svg>
                                                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-down"></use>
                                            </svg>
                                        </div>
                                        <?php if(!empty($class['skills'])) : ?>
                                            <div class="dropdown__content">
                                                <?php foreach($class['skills'] as $skill) : ?>
                                                    <span class="pgv-0_75 pgh-1_5 radius-1-rem bg-gray_lighter size-fit mgr-1 mgb-1 title--smaller"><?=$skill['title']; ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>







<?php get_footer() ?>