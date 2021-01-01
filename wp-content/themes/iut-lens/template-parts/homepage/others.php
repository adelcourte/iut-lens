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
<?php include(get_template_directory().'/data-managers/homepage/Others.php'); ?>
<section>
    <?php if(!empty($title)) : ?>
        <h2><?=$title; ?></h2>
    <?php endif; ?>
    <?php if(!empty($categories)) : ?>
        <?php foreach($categories as $item) : ?>
            <span><?=$item['title']; ?></span>
        <?php endforeach; ?>
    <?php endif; ?>
</section>