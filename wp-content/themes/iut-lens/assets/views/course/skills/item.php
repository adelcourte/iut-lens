<div class="size-30 pgv-2 pgh-1 bg-white radius-1 bd-1-gray_lighter flex layout-column hvr-transY-1">
    <?php if($title) : ?>
        <span class="fw-700 text-black mgb-0_75"><?=$title; ?></span>
    <?php endif; ?>
    <?php if($content) : ?>
        <p class="small mgb-0_75"><?=$content; ?></p>
    <?php endif; ?>
    <?php if($icon_id) : ?>
        <img src="<?=wp_get_attachment_url($icon_id); ?>" alt="icon" class="icon--big mgt-auto">
    <?php endif; ?>
</div>