<?php
/**
 * heroes.hero-home view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgt-5">
    <div class="row align-center-center p-relative pgt-7_5 pgb-15">
        <div class="column-12 md-column-6 align-center-center text-center">
            <?php if(!empty($uptitle)) : ?>
                <h1 class="title text-gray"><?=$uptitle; ?></h1>
            <?php endif; ?>
            <?php if(!empty($title)) : ?>
                <span class="title--extra--extrabold mgb-1"><?=$title; ?></span>
            <?php endif; ?>
            <?php if(!empty($content)) : ?>
                <p class="mgb-2"><?=$content; ?></p>
            <?php endif; ?>
            <div>
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button--blue--shadow"><?=$link_title; ?></a>
            </div>
        </div>
        <?php if($images_src[0]) : ?>
            <div class="pg-7_5 content-empty p-absolute left-0 radius-tl-50 shadow-aqua-faded rellax" data-rellax-speed="-2" style="background: #3CC8DB url('<?=$images_src[0]; ?>') no-repeat bottom/cover;"></div>
        <?php endif; ?>
        <?php if($images_src[1]) : ?>
            <div class="pg-7_5 content-empty p-absolute right-0 top-0 radius-50 shadow-orange-faded rellax" data-rellax-speed="-3" style="background: #FD9F42 url('<?=$images_src[1]; ?>') no-repeat bottom/cover;"></div>
        <?php endif; ?>
        <?php if($images_src[2]) : ?>
            <div class="pg-7_5 content-empty p-absolute right-7_5 bottom-0 radius-br-50 shadow-purple-faded rellax" data-rellax-speed="-1" style="background: #BE4BDB url('<?=$images_src[2]; ?>') no-repeat bottom/cover;"></div>
        <?php endif; ?>
    </div>
</section>