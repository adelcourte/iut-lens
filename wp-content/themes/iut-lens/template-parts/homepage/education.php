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
        <div class="column-12 mgb-2_5">
            <h2 class="title title--bold title--big text-center underline underline--blue underline--center pgb-1"><?=$title; ?></h2>
        </div>
        <?php if(!empty($fields)) : ?>
            <?php foreach($fields as $item) : ?>
                <div class="column-4 card-field--container mgt-5 mgh-0_5">
                    <div class="card-field flex layout-column height-20 bd-1-gray_lighter">
                        <div class="card-field__header" style="background-image: url('<?=wp_get_attachment_image_url($item['image_id']); ?>;">
                            <div class="card-field__header__overlay"></div>
                        </div>
                        <div class="flex grow-1 layout-column pg-1_5">
                            <span class="title title--small mgb-0_5" style="color: <?=$item['color']; ?>;"><?=$item['uptitle']; ?></span>
                            <h3 class="title mgb-1"><?=$item['title']; ?></h3>
                            <p class="mgb-2"><?=$item['content']; ?></p>
                            <?php if(!empty($item['link'])) : ?>
                                <a href="<?=$item['link']['url']; ?>" target="<?=$item['link']['target']; ?>" class="link-arrow size-fit mgt-auto"><?=$item['link']['title']; ?></a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>