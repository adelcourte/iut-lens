<?php get_header() ?>





    <?php
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $id = $term->taxonomy . '_' . $term->term_id;

        if (!empty($term->name)) {
            $title = $term->name;
        }

        $color = \get_field('_dpt_color', $id);
        $content = \get_field('_dpt_hero_content', $id);
        $vid_src = \get_field('_dpt_hero_link', $id);
    ?>

    <section class="mgt-5 mgb-2_5">
        <div class="row pgv-5">
            <div class="column-12 mgb-2">
                <?php require_once(dirname( __FILE__ ) . '/assets/views/_components/breadcrumbs/department.php'); ?>
            </div>
            <div class="column-6">
                <?php if(!empty($title)) : ?>
                    <h1 class="title--extra mgb-1"><?php _e('Département', 'iut_lens'); ?><br><?=$title; ?></h1>
                <?php endif; ?>
                <?php if(!empty($content)) : ?>
                    <?=$content; ?>
                <?php endif; ?>
            </div>
            <div class="column-12 mgt-2 layout-row">
                <a href="#courses" class="button--blue">En savoir plus</a>
                <?php if(!empty($vid_src)) : ?>
                    <span id="video_popup_button" class="button--gray mgl-1">Voir la vidéo</span>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($color)) : ?>
            <div class="field-circles field-circles--giant p-absolute right-minus-2_5 top-50-percent transY-50">
                <div class="field-circles__color rellax top-0 left-0" style="background-color: <?=$color; ?>"></div>
                <div class="field-circles__blue top-0 right-0 rellax" data-rellax-speed="3"></div>
            </div>
        <?php endif; ?>
    </section>

    <?php if(!empty($vid_src)) : ?>
        <iframe src="<?=$vid_src; ?>" class="video_popup" id="video_popup"></iframe>
        <div id="video_dark_overlay"></div>
    <?php endif; ?>





    <div id="courses" class="pgb-7_5 content-empty"></div>





    <?php
        $courses_query = new WP_Query([
            'post_type'     => 'course',
            'status'        => 'publish',
        ]);
        
        $courses = [];

        if (!empty($courses_query)) {
            $courses_posts = $courses_query;
            $current_term_id = get_queried_object_id();

            while($courses_posts->have_posts()) {
                $courses_posts->the_post();

                $term = wp_get_post_terms( get_the_ID(), 'department');
                $term_id = $term[0]->term_id;

                if($current_term_id == $term_id) {
                    $course = [
                        'type'          => \get_field('_course_infos_type'),
                        'title'         => \get_field('_course_infos_title_short'),
                        'link_url'      => \get_the_permalink(),
                        'color'         => \get_field('_dpt_color', 'department_' . $term_id),
                        'entry'         => \get_field('_course_infos_entry'),
                        'years'         => \get_field('_course_infos_years'),
                        'internships'   => \get_field('_course_infos_internships'),
                    ];
                    
                    $courses[] = $course;
                }
            }

            wp_reset_postdata();
        }
    ?>

    <section>
        <div class="row mgb-2_5">
            <div class="column-12">
                <span class="title--extra">Les formations</span>
            </div>
        </div>
        <div class="row">
            <div class="column-12">
                <?php if(!empty($courses)) : ?>
                    <?php foreach($courses as $item) : ?>
                        <?php if(!empty($item['title'])) : ?>
                            <a href="<?php if(!empty($item['link'])) : ?> <?=$item['link']; ?> <?php endif; ?>" class="link-rectangle mgb-1">
                                <h2 class="title"><?=$item['title']; ?></h2>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <?php
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $id = $term->taxonomy . '_' . $term->term_id;

        $people = \get_field('_dpt_people', $id);
    ?>

    <section>
        <div class="row align-spacebetween-start">
            <div class="column-4">
                <span class="title--extra">Organisation des études</span>
            </div>
            <?php if(!empty($people)) : ?>
                <div class="column-7">
                    <?php $last = end($people); ?>
                    <?php foreach($people as $item) : ?>
                        <div class="flex align-spacebetween-start <?php if($item != $last) : ?> pgb-1_25 mgb-1_25 bdb-1-gray_extralight <?php endif; ?>">
                            <div class="text-left">
                                <span class="title mgb-0_5"><?=$item['name']; ?></span>
                                <span class="small"><?=$item['job']; ?></span>
                            </div>
                            <div class="text-right text-blue">
                                <?php if($phone = $item['phone']) : ?>
                                    <span class="small mgb-0_5"><?=$phone; ?></span>
                                <?php endif; ?>
                                <?php if($mail = $item['mail']) : ?>
                                    <span class="small"><?=$mail; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer() ?>