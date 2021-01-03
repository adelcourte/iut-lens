<?php
/**
 *
 *
 * @package WordPress
 * @subpackage IUT-Lens theme
 *
 *
 * @var string
 */
?>
<?php include(get_template_directory().'/data-managers/homepage/Speech.php'); ?>
<section class="bd-1-gray_lighter bg-white pgv-5">
    <div class="row align-spacearound-stretch">
        <div class="column-8 md-column-4 mgb-2_5 md-mgb-0">
            <div class="image-container image-container--vertical size-100 height-20" style="background-image: url('<?=$src; ?>');"></div>
            <img src="<?=get_template_directory_uri().'/assets/svg/quote-marks.svg'; ?>" alt="quote_marks" class="icon--huge quote-marks">
        </div>
        <div class="column-12 md-column-5 md-pgv-2 md-bdb-1-blue_light">
            <?php if(!empty($title)) : ?>
                <h2 class="title mgb-0_5"><?=$title; ?></h2>
            <?php endif; ?>
            <?php if(!empty($subtitle)) : ?>
                <span class="text-small text-blue mgb-2"><?=$subtitle; ?></span>
            <?php endif; ?>
            <?php if(!empty($content)) : ?>
                <div class="swiper-container swiper-speech">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><?=$content; ?></div>
                        <div class="swiper-slide"><?=$content; ?></div>
                        <div class="swiper-slide"><?=$content; ?></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="column-2 align-center-center">
            <div class="swiper-speech__toggles">
                <div class="swiper-speech__toggles__container">
                    <div class="swiper-speech__pagination text-white text-center pgb-0_5"></div>
                    <div class="flex align-center-center">
                        <img src="<?=get_template_directory_uri().'/assets/svg/arrow-right-white.svg'; ?>" alt="swiper_toggle" class="swiper-speech__prev mgh-0_5">
                        <img src="<?=get_template_directory_uri().'/assets/svg/arrow-right-white.svg'; ?>" alt="swiper_toggle" class="swiper-speech__next mgh-0_5">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper('.swiper-speech', {
            pagination: {
                el: '.swiper-speech__pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-speech__next',
                prevEl: '.swiper-speech__prev',
            },
        });
    </script>
</section>