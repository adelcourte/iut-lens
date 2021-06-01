<?php get_header() ?>

<?php while(have_posts()) : ?>
    <?php the_post(); ?>
    <section class="mgv-5">
        <div class="row align-center-center">
            <div class="column-12 mgb-5">
                <div class="size-100 pgb-50-percent content-empty" style="background: url('<?=get_the_post_thumbnail_url(); ?>') no-repeat center/cover;"></div>
            </div>
            <div class="column-8">
                <h1 class="title--extra"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <section>
        <div class="row align-center-center">
            <div class="column-8 align-center-center post-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_bridge('theme')->{'_c_void_News@init'}(); ?>

<?php get_footer() ?>