<?php
/**
 * Template Name: International
 * Template Post Type: page
 *
 * @package WordPress
 *
 */
get_header();
?>





    <?php
        $title = \get_field('_int_hero_title');
        $content = \get_field('_int_hero_content');
    ?>

    <section class="mgt-12_5">
        <div class="row align-spacebetween-start mgb-3_5">
            <div class="column-4">
                <?php if(!empty($title)) : ?>
                    <span class="title--huge"><?=$title; ?></span>
                <?php endif; ?>
            </div>
            <div class="column-7">
                <?php if(!empty($content)) : ?>
                    <div class="content">
                        <?=$content; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <?php
        $sections = \get_field('_int_sections');
    ?>
    
    <?php if(!empty($sections)) : ?>
        <?php foreach($sections as $section) : ?>
            <section>
                <div class="row <?php if($section['right'] == false): ?>layout-rowreverse<?php endif; ?> align-spacebetween-center">
                    <?php if($src = wp_get_attachment_url($section['image_id'])) : ?>
                        <div class="column-6 ovf-hidden height-20 p-absolute <?php if($section['right']): ?>right-0<?php else: ?>left-0<?php endif; ?> top-0">
                            <div
                                class="content-empty height-20 size-100"
                                style="background: url('<?=$src; ?>') no-repeat center/cover;"
                            >
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="column-6 pgv-5">
                        <?php if($number = $section['number']) : ?>
                            <span class="title--huge text-blue mgb-0_5"><?=$number; ?></span>
                        <?php endif; ?>
                        <?php if($title = $section['title']) : ?>
                            <span class="title--extra mgb-2"><?=$title; ?></span>
                        <?php endif; ?>
                        <?php if($content = $section['content']) : ?>
                            <div class="content">
                                <?=$content; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($labels = $section['labels']) : ?>
                            <div class="flex layout-wrap mgt-2">
                                <?php foreach($labels as $label) : ?>
                                    <span class="label"><?=$label['title']; ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>
    <?php endif; ?>





<?php
get_footer();