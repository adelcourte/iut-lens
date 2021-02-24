<?php
/**
 * course.skills.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgh-auto mgb-2 md-mgb-4">
    <a id="<?=$anchor_id; ?>" class="anchor dp_none" data-title="<?=$anchor_title; ?>"></a>
    <div class="row align-center-center">
        <div class="column-8 mgb-2">
            <?php if($title) : ?>
                <div class="flex">
                    <span class="title--small mgr-0_5" style="color: <?=$dpt_color; ?>">#</span>
                    <h3 class="title--small"><?=$title; ?></h3>
                </div>
            <?php endif; ?>
        </div>
        <?php if($list) : ?>
            <div class="column-8 pgb-2 md-pgb-4 bdb-1-gray_light layout-row layout-wrap align-spacebetween-stretch">
                <?php foreach($list as $item) :
                    theme_view('course.skills.item', $item);
                endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>