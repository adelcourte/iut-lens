<div class="column-5">
    <div class="bg-white bd-3-gray_lighter pg-3_5 height-20 flex layout-column align-center-center radius-2">
        <?php if(!empty($image_id)) : ?>
            <div class="content-empty pg-3_5 radius-50 mgb-2" style="background: url('<?=wp_get_attachment_url($image_id); ?>') no-repeat center/cover;"></div>
        <?php endif; ?>
        <?php if(!empty($title)) : ?>
            <?php if(!empty($link['url'])) : ?>
                <a href="<?=$link['url']; ?>" target="<?=$link['target']; ?>"><h4 class="title"><?=$title; ?></h4></a>
            <?php else : ?>
                <h4 class="title"><?=$title; ?></h4>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(!empty($content)) : ?>
            <p class="mgt-1 text-center mgb-2"><?=$content; ?></p>
        <?php endif; ?>
        <?php if(!empty($link['url'])) : ?>
            <span data-fl="<?=base64_encode(esc_url($link['url'])); ?>" class="button--blue mgt-auto"><?=$link['title']; ?></span>
        <?php endif; ?>
    </div>
</div>