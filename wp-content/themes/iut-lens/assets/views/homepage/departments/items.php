<?php
/**
 * homepage.departments.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="background-shape background-shape--gray">
    <div class="row align-spacebetween-center">
        <div class="column-12 md-column-4 mgb-2_5 md-mgb-0">
            <?php if(!empty($title)) : ?>
                <span class="title--big mgb-0_75"><?=$title; ?></span>
            <?php endif; ?>
            <?php if(!empty($content)) : ?>
                <p class="mgb-1_5"><?=$content; ?></p>
            <?php endif; ?>
            <?php if(!empty($link_url)) : ?>
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button--blue--shadow"><?=$link_title; ?></a>
            <?php endif; ?>
        </div>
        <?php if(!empty($departments)) : ?>
            <div class="column-12 md-column-7 layout-row layout-wrap align-spacebetween-stretch">
                <?php foreach($departments as $dpt) :
                    theme_view('homepage.departments.item', $dpt);
                endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>