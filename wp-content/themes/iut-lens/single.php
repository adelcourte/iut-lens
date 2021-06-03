<?php get_header() ?>

<?php while(have_posts()) : ?>
    <?php the_post(); ?>
    <section class="mgt-7_5 mgb-5">
        <div class="row align-center-center">
            <div class="column-8 align-end-start mgb-2_5">
                <span class="mgb-0_5"><?php the_date(); ?></span>
                <h1 class="title--huge size-fit"><?php the_title(); ?></h1>
            </div>
            <div class="column-10">
                <div class="size-100 pgb-50-percent content-empty" style="background: url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover;"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="row align-center-center">
            <div class="column-8 align-center-center">
                <div class="content flex layout-column align-center-center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_bridge('theme')->{'_c_void_News@init'}(); ?>

<?php get_footer() ?>