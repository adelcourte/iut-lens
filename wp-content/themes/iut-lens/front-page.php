<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content() ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php

    get_bridge('theme')->{'_c_void_HpFields@init'}();

?>

<?php get_footer() ?>