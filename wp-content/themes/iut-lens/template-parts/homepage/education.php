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
<?php include(get_template_directory().'/data-managers/homepage/Education.php'); ?>
<section>
    <div class="row align-center-stretch">
        <div class="column-12">
            <h2 class="title title--bold title--big text-center underline underline--blue underline--center pgb-1 mgb-2_5"><?=$title; ?></h2>
        </div>
        <?php if(!empty($fields)) : ?>
            <?php foreach($fields as $item) : ?>
                <div class="column-4 card-field--container mgt-5 mgh-0_5">
                    <div class="card-field flex layout-column height-20">
                        <div class="card-field__header" style="background-image: url('<?=wp_get_attachment_image_url($item['image_id']); ?>;">
                            <span class="card-field__header__title"><?=$item['title']; ?></span>
                            <div class="card-field__header__overlay" style="background-color: <?=$item['color']; ?>;"></div>
                        </div>
                        <div class="flex layout-column pg-1_5">
                            <span class="title fz-16 mgb-0_5" style="color: <?=$item['color']; ?>;"><?=$item['uptitle']; ?></span>
                            <h3 class="title mgb-1"><?=$item['title']; ?></h3>
                            <p><?=$item['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if(!empty($link_url)) : ?>
            <div class="column-12 align-center-center mgt-5">
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="link-arrow size-fit"><?=$link_title; ?></a>
            </div>
        <?php endif;?>
    </div>
</section>