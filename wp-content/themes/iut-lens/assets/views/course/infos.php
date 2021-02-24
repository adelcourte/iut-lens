<?php
/**
 * course.infos view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgh-auto mgt-7_5 mgb-2 md-mgb-4">
    <a id="<?=$anchor_id; ?>" class="anchor dp_none" data-title="<?=$anchor_title; ?>"></a>
    <div class="row align-center-center">
        <div class="column-8 mgb-2_5">
            <?php if($dpt_name) : ?>
                <a href="<?=$dpt_url; ?>"><span class="title--smaller mgb-1" style="color: <?=$dpt_color; ?>"><?=$dpt_name; ?></span></a>
            <?php endif; ?>
            <?php if($title) : ?>
                <h1 class="title--extra--bolder"><?=$title; ?></h1>
            <?php endif; ?>
        </div>
        <?php if($image_src) : ?>
            <div class="column-8 pgb-2_5 p-relative">
                <div class="size-100 pgb-50-percent content-empty" style="background: <?=$dpt_color; ?> url('<?=$image_src; ?>') no-repeat center/cover;"></div>
                <div class="content-empty p-absolute bottom-0 right-minus-2_5 pg-5 radius-br-50 z-5" style="background: <?=$dpt_color; ?>"></div>
            </div>
        <?php endif; ?>
    </div>
</section>