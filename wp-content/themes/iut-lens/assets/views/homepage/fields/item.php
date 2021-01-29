<div class="card-field size-100 md-size-45 flex layout-column align-center-center pgv-2 pgh-1 mgv-1 md-mgv-1_5 bd-1-gray_lighter">
    <div class="field-circles">
        <div class="field-circles__color" style="background-color: <?=$color; ?>"></div>
        <div class="field-circles__blue"></div>
    </div>
    <?php if(!empty($diplomas)) : ?>
        <span class="mgt-0_75 text-gray_light"><?=$diplomas; ?></span>
    <?php endif; ?>
    <?php if(!empty($title)) : ?>
        <span class="title--bold title--small text-black mgt-0_25 mgb-0_5 fz-18"><?=$title; ?></span>
    <?php endif; ?>
    <?php if(!empty($content)) : ?>
        <p class="text-center mgb-1 fz-15"><?=$content; ?></p>
    <?php endif; ?>
    <?php if(!empty($link_url)) : ?>
        <a href="<?=$link_url; ?>" class="link-arrow mgt-auto">En savoir plus</a>
    <?php endif; ?>
</div>