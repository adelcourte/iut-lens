<div class="column-6">
    <div class="size-100 height-20 bg-gray_lighter pg-4 flex layout-column align-center-center card-hover-blue">
        <?php if($title) : ?>
            <span class="title text-gray_dark">Vous êtes</span>
            <?php if(!empty($link['url'])) : ?>
                <a href="<?=$link['url']; ?>" target="<?=$link['target']; ?>"><h3 class="title--big mgb-1_5"><?=$title; ?></h3></a>
            <?php else : ?>
                <h3 class="title--big mgb-1_5"><?=$title; ?></h3>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($content) : ?>
            <p class="mgb-2_5 text-center"><?=$content; ?></p>
        <?php endif; ?>
        <?php if(!empty($link['url'])) : ?>
            <span data-fl="<?=base64_encode(esc_url($link['url'])); ?>" class="button--white mgt-auto"><?=$link['title']; ?></span>
        <?php endif; ?>
    </div>
</div>