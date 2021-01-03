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
<?php include(get_template_directory().'/data-managers/options/Menu.php'); ?>

<nav class="nav-main">
    <div class="row align-spacebetween-center">
        <div class="column-8 layout-row align-spacearound-start">
            <?php if(!empty($links)) : ?>
                <?php foreach($links as $entry) : ?>
                    <?php if($entry['sub_menu']) : ?>
                        <span class="nav-main__link size-fit pgb-0_25"><?=$entry['link']['title']; ?></span>
                    <?php else : ?>
                        <a href="<?=$entry['link']['url']; ?>" target="<?=$entry['link']['target']; ?>" class="nav-main__link size-fit pgb-0_25"><?=$entry['link']['title']; ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="column-2 align-center-end">
            <?php if(!empty($link_url)) : ?>
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button button--inverted size-fit"><?=$link_title; ?></a>
            <?php endif;?>
        </div>
    </div>
</nav>