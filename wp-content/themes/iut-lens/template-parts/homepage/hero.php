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
<?php include(get_template_directory().'/data-managers/homepage/Hero.php'); ?>
<section class="height-20">
    <div class="row pgv-10">
        <div class="column-5">
            <?php if(!empty($uptitle)) : ?>
                <span class="text-blue fw-500 mgb-0_5"><?=$uptitle; ?></span>
            <?php endif;?>
            <?php if(!empty($title)) : ?>
                <h1 class="title title--bold title--huge mgb-2"><?=$title; ?></h1>
            <?php endif;?>
            <?php if(!empty($content)) : ?>
                <p class="mgb-2"><?=$content; ?></p>
            <?php endif;?>
            <?php if(!empty($link_url)) : ?>
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button size-fit"><?=$link_title; ?></a>
            <?php endif;?>
            <?php if(!empty($link_vid_url)) : ?>
                <a href="<?=$link_vid_url; ?>" target="<?=$link_vid_target; ?>"><?=$link_vid_title; ?></a>
            <?php endif;?>
        </div>
    </div>
    <div class="out-layout out-layout--right height-20 size-45 flex align-center-center layout-column">
        <div class="size-100 flex">
            <div class="flex layout-column size-25">
                <div class="shape-1 size-100"></div>
                <div class="shape-2 size-100"></div>
            </div>
            <div class="shape-image size-75" style="background-image: url('<?=$src; ?>');">
            </div>
        </div>
        <div class="size-100 flex">
            <div class="shape-3 size-25"></div>
            <div class="shape-4 size-25"></div>
            <div class="shape-5 size-50"></div>
        </div>
    </div>
</section>