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
    <div class="row align-center-center">
        <?php if(!empty($title)) : ?>
            <div class="column-12 mgb-5">
                <span class="title--big"><?=$title; ?></span>
            </div>
        <?php endif; ?>
        <?php if(!empty($list)) : ?>
            <?php foreach($list as $item) : ?>
                <?php theme_view('homepage.speech.item', $item); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if($quote) : ?>
            <div class="column-8 mgt-10 pgt-5 align-center-center p-relative">
                <img src="<?=get_template_directory_uri().'/assets/svg/quote-marks-big.svg' ?>" alt="quote_marks" class="icon--giant p-absolute top-0 left-50-percent transX-50 z-10">
                <span class="title--big mgt-0_5 mgb-2 text-center"><?=$quote; ?></span>
                <span class="text-gray_light"><?=$author['firstname']; ?> <?=$author['lastname']; ?>, <?=$author['job']; ?></span>
            </div>
        <?php endif; ?>
</section>