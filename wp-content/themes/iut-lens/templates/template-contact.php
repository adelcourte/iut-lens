<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * @package WordPress
 *
 */
get_header();
?>

<section>
    <div class="row">
        <div class="column-12">
            <?=do_shortcode('[ninja_form id=2]'); ?>
        </div>
    </div>
</section>

<?php
get_footer();