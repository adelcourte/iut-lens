
<?php get_header() ?>





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

    <section class="mgh-auto mgt-7_5 mgb-2 md-mgb-4">
        <a id="<?=$anchor_id; ?>" class="anchor dp_none" data-title="<?=$anchor_title; ?>"></a>
        <div class="row align-spacearound-center">
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
                    <h1 class="title--extra"><?=$title; ?></h1>
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

    <section>
        <div class="row align-spacearound-start">
            <div class="column-8">
                <span class="title--big mgb-2_5">Objectifs</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_skills_content', $id);
    ?>

    <section>
        <div class="row align-spacearound-start">
            <div class="column-8">
                <span class="title--big mgb-2_5">Compétences</span>
                <div class="content">
                    <?=$content; ?>
                </div>
            </div>
        </div>
    </section>
    </section>





    <?php
        $id = \get_the_ID();

        $content = \get_field('_course_jobs_content', $id);
        $jobs = \get_field('_course_jobs_list', $id);
    ?>

    <section>
        <div class="row align-spacearound-start">
            <div class="column-8">
                <span class="title--big mgb-2_5">Débouchés</span>
                <div class="content">
                    <?=$content; ?>
                </div>
                <?php if(!empty($jobs)) : ?>
                    <div class="flex mgt-2 layout-wrap">
                        <?php foreach($jobs as $item) : ?>
                            <span class="pgv-0_5 pgh-1 radius-1-rem bg-gray_lighter size-fit mgr-1 mgb-1 title"><?=$item['title']; ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>







<?php get_footer() ?>