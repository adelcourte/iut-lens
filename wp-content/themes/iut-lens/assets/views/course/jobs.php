<?php
/**
 * course.jobs view.
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
        <div class="column-8 pgb-2 md-pgb-4 bdb-1-gray_lighter">
            <?php if($title) : ?>
                <div class="flex mgb-2">
                    <span class="title--small mgr-0_5" style="color: <?=$field_color; ?>">#</span>
                    <h3 class="title--small"><?=$title; ?></h3>
                </div>
            <?php endif; ?>
            <?php if($list) : ?>
                <?php foreach($list as $item) : ?>
                    <h2 class="title--smaller pgb-0_75 mgb-0_75 bdb-1-gray_light text-gray_darker"><?=$item['title']; ?></h2>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>