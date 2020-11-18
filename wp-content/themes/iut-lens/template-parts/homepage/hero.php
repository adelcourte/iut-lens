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
<section>
    <?php if(!empty($uptitle)) : ?>
        <span><?=$uptitle; ?></span>
    <?php endif;?>
    <?php if(!empty($title)) : ?>
        <h1><?=$title; ?></h1>
    <?php endif;?>
    <?php if(!empty($content)) : ?>
        <p><?=$content; ?></p>
    <?php endif;?>
    <?php if(!empty($link_ed_url)) : ?>
        <a href="<?=$link_ed_url; ?>" target="<?=$link_ed_target; ?>"><?=$link_ed_title; ?></a>
    <?php endif;?>
    <?php if(!empty($link_news_url)) : ?>
        <a href="<?=$link_news_url; ?>" target="<?=$link_news_target; ?>"><?=$link_news_title; ?></a>
    <?php endif;?>
    <?php if(!empty($link_vid_url)) : ?>
        <a href="<?=$link_vid_url; ?>" target="<?=$link_vid_target; ?>"><?=$link_vid_title; ?></a>
    <?php endif;?>
    <?php if(!empty($src)) : ?>
        <img src="<?=$src; ?>" alt="hero_image">
    <?php endif;?>
</section>