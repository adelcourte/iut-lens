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
<section>
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
                <?=$content; ?>
            <?php endif; ?>
        </div>
    </div>
</section>