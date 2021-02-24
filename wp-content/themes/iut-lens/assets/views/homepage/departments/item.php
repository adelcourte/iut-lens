<div class="card-field size-100 md-size-45 flex layout-column align-center-center pgv-2 pgh-1 mgv-1 md-mgv-1_5 bd-1-gray_lighter">
    <div class="field-circles mgb-1_5">
        <div class="field-circles__color" style="background-color: <?=$color; ?>"></div>
        <div class="field-circles__blue"></div>
    </div>
    <?php if(!empty($diplomas)) : ?>
        <h3 class="mgb-0_5 text-gray_light"><?=$diplomas; ?></h3>
    <?php endif; ?>
    <?php if(!empty($title)) : ?>
        <?php if(!empty($link_url)) : ?>
            <a href="<?=$link_url; ?>">
                <h2 class="title--small mgb-1"><?=$title; ?></h2>
            </a>
        <?php else : ?>
            <h2 class="title--small mgb-1"><?=$title; ?></h2>
        <?php endif; ?>
    <?php endif; ?>
    <?php if(!empty($content)) : ?>
        <p class="text-center mgb-2 fz-15"><?=$content; ?></p>
    <?php endif; ?>
    <?php if(!empty($link_url)) : ?>
        <span data-fl="<?=base64_encode(esc_url($link_url)); ?>" class="link-arrow--blue mgt-auto">
            Découvrir
            <svg class="icon icon--blue">
                <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow"></use>
            </svg>
        </span>
    <?php endif; ?>
</div>