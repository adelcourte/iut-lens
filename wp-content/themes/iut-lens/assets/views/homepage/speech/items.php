<?php
/**
 * homepage.speech.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section>
    <div class="row">
        <?php if(!empty($title)) : ?>
            <div class="column-12 mgb-5">
                <span class="title--big text-center"><?=$title; ?></span>
            </div>
        <?php endif; ?>
        <?php if(!empty($list)) : ?>
            <?php foreach($list as $item) : ?>
                <?php theme_view('homepage.speech.item', $item); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if(!empty($author)) : ?>
            <div class="column-12 mgt-2_5">
                <div class="flex align-start-center">
                    <div class="content-empty pg-1_75 radius-50" style="background: url('<?=$author['src']; ?>') no-repeat center/cover"></div>
                    <div class="flex layout-column mgl-1">
                        <span class="title--smaller"><?=$author['firstname']; ?> <?=$author['lastname']; ?></span>
                        <span class="small mgt-0_25"><?=$author['job']; ?></span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>