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
            <div class="column-12 mgb-2_5">
                <span class="title--big text-center"><?=$title; ?></span>
            </div>
        <?php endif; ?>
        <?php if(!empty($list)) : ?>
            <div class="column-12 ovf-hidden">
                <div class="swiper-speech p-relative pg-5">
                    <div class="parallax-bg" style="background-image: url('https://lvdneng.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2019/10/29/node_658310/42084220/public/2019/10/29/B9721403567Z.1_20191029142157_000%2BG3SEPV2KG.3-0.jpg?itok=FVcpmsZp1572355371');" data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                        <?php foreach($list as $item) : ?>
                            <?php theme_view('homepage.speech.item', $item); ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="dark-overlay"></div>
                </div>
            </div>
            <div class="column-12 layout-row align-spacebetween-center pgt-2_5 pgh-5">
                <div class="swiper-speech__pagination flex align-start-center"></div>
                <div class="flex align-center-center">
                    <img src="<?=get_template_directory_uri().'/assets/svg/arrow-right.svg'; ?>" alt="swiper_toggle" class="swiper-speech__prev mgr-0_5">
                    <img src="<?=get_template_directory_uri().'/assets/svg/arrow-right.svg'; ?>" alt="swiper_toggle" class="swiper-speech__next mgl-0_5">
                </div>
            </div>
        <?php endif; ?>
        <?php if(!empty($author)) : ?>
            <div class="column-12 mgt-2_5 pgh-5 align-end-center">
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