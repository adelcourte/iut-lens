<?php
/**
 * heroes.hero-department view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgt-5">
    <div class="row pgv-5">
        <div class="column-12 mgb-2">
            <?php require_once(dirname( __FILE__ ) . '/../_components/breadcrumbs/department.php'); ?>
        </div>
        <div class="column-6">
            <?php if(!empty($title)) : ?>
                <h1 class="title--extra mgb-1"><?php _e('Département', 'iut_lens'); ?><br><?=$title; ?></h1>
            <?php endif; ?>
            <?php if(!empty($content)) : ?>
                <?=$content; ?>
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