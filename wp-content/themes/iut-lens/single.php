
<?php get_header() ?>

<?php while(have_posts()) : ?>
    <?php the_post(); ?>
    <section class="pgv-15 full-width">
        <div class="row p-relative">
            <div class="column-5 p-absolute left-0 top-50-percent transY-50">
                <h1 class="title--big--bolder"><?php the_title(); ?></h1>
                <?php
                    $author = [];
                    $author_id = get_the_author_meta('ID');
                    $author_data = get_userdata($author_id);
                    $author['firstname'] = $author_data->user_firstname;
                    $author['lastname'] = $author_data->user_lastname;
                    $author['src'] = get_avatar_url($author_id);
                ?>
                <div class="flex align-start-center mgt-2_5">
                    <div class="content-empty pg-1_5 radius-50" style="background: url('<?=$author['src']; ?>') no-repeat center/cover"></div>
                    <div class="flex layout-column mgl-1">
                        <span class="title--smaller"><?=$author['firstname']; ?> <?=$author['lastname']; ?></span>
                        <span class="small mgt-0_25">le <?php the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-empty p-absolute height-20 size-50 top-0 right-0 radius-bl-50" style="background: url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover;"></div>
    </section>

    <section>
        <div class="row align-center-center">
            <div class="column-8 align-center-center post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer() ?>