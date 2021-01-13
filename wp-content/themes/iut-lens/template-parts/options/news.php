<?php
/**
 *
 *
 * @package WordPress
 * @subpackage IUT-Lens theme
 *
 *
 * @var string
 */
?>
<?php include(get_template_directory().'/data-managers/options/News.php'); ?>
<section>
    <div class="row">
        <?php if ($news->have_posts()) : ?>
            <div class="column-4">
                <?php while ($news->have_posts()) : ?>
                    <?php $news->the_post(); ?>
                    <div class="size-100 flex layout-column">
                        <span class="fz-20 mgb-0_5 fw-700 text-black"><?=the_title(); ?></span>
                        <span><?=the_date(); ?></span>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>