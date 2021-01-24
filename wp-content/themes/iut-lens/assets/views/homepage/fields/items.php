<div class="section background-shape background-shape--gray">
    <div class="row align-spacebetween-center">
        <div class="column-3">
            <?php if(!empty($title)) : ?>
                <span class="title--big title--extrabold mgb-0_75 text-black"><?=$title; ?></span>
            <?php endif; ?>
            <?php if(!empty($content)) : ?>
                <p class="mgb-1_5"><?=$content; ?></p>
            <?php endif; ?>
            <?php if(!empty($link_url)) : ?>
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button button--blue button--blue--shadow"><?=$link_title; ?></a>
            <?php endif; ?>
        </div>
        <div class="column-7 layout-row layout-wrap align-spacebetween-stretch">
            <?php if(!empty($fields)) :
                foreach($fields as $field) :
                    theme_view('homepage.fields.item', $field);
                endforeach;
            endif; ?>
        </div>
    </div>
</div>