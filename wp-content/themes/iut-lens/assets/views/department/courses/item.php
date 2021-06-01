<div class="column-12 md-column-4 mgt-2_5">
    <div class="size-100 p-relative pgt-7_5">
        <div class="card-course size-95 mgh-auto flex layout-column pg-2 mgv-1 md-mgv-1_5 bg-white shadow-gray_extralight-faded p-relative z-10">
            <?php if(!empty($type['label'])) : ?>
                <h3 class="fz-14 mgb-0_5" style="color: <?=$color; ?>;"><?=$type['label']; ?></h3>
            <?php endif; ?>
            <?php if(!empty($title)) : ?>
                <?php if(!empty($link_url)) : ?>
                    <a href="<?=$link_url; ?>">
                        <h2 class="title mgb-1"><?=$title; ?></h2>
                    </a>
                <?php else : ?>
                    <h1 class="title mgb-1"><?=$title; ?></h1>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($content)) : ?>
                <p class="mgb-2 fz-15"><?=$content; ?></p>
            <?php endif; ?>
            <?php if(!empty($link_url)) : ?>
                <span data-fl="<?=base64_encode(esc_url($link_url)); ?>" class="link-arrow mgt-auto size-fit" style="color: <?=$color; ?> !important;">
                    Découvrir
                    <svg class="icon" style="fill: <?=$color; ?>">
                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow"></use>
                    </svg>
                </span>
            <?php endif; ?>
        </div>
        <div class="content-empty size-100 pgb-70-percent p-absolute top-0 left-0 z-5" style="background: url('<?=esc_url($image_src); ?>') no-repeat center/cover;"></div>
    </div>
</div>