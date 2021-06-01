<?php
/**
 * Template Name: F.A.Q
 * Template Post Type: page
 *
 * @package WordPress
 *
 */
get_header();
?>





    <?php
        $title = \get_field('_faq_hero_title');
    ?>

    <section class="mgt-7_5">
        <?php if(!empty($title)) :?>
            <div class="row">
                <div class="column-12">
                    <h1 class="title--huge text-center"><?=$title; ?></h1>
                </div>
            </div>
        <?php endif; ?>
    </section>





    <?php
        $categories = \get_field('_faq_categories');
    ?>

    <section>
        <div class="row align-center-start">
            <div class="column-12">
                <?php if(!empty($categories)) : ?>
                    <div class="carousel">
                        <div class="carousel__header">
                            <?php foreach($categories as $cat) : ?>
                                <span class="carousel__header__link <?php if($cat == $categories[0]) : ?> active <?php endif; ?>" data-cat="<?=$cat['title']; ?>"><?=$cat['title']; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="carousel__slides">
                            <?php foreach($categories as $cat) : ?>
                                <div class="carousel__slides__slide <?php if($cat == $categories[0]) : ?> visible <?php endif; ?>" data-cat="<?=$cat['title']; ?>">
                                    <?php if(!empty($cat['questions'])) : ?>
                                        <?php foreach($cat['questions'] as $item) : ?>
                                            <div class="dropdown closed">
                                                <div class="dropdown__header">
                                                    <span class="title--small--bold"><?=$item['title']; ?></span>
                                                    <svg>
                                                        <use xlink:href="<?=get_template_directory_uri(); ?>/assets/svg/sprite.svg#icon-arrow-down"></use>
                                                    </svg>
                                                </div>
                                                <?php if(!empty($item['content'])) : ?>
                                                    <div class="dropdown__content content">
                                                        <?=$item['content']; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>





    <?php
        $title = \get_field('_faq_contact_title');
        $link = \get_field('_faq_contact_link');

        $link_title = $link['title'];
        $link_target = $link['target'];
        $link_url = $link['url'];
    ?>
    <section>
        <div class="row">
            <div class="column-12 align-center-center">
                <div class="size-75 pgv-4 radius-1-rem bg-gray_extralight flex layout-column align-center-center">
                    <?php if(!empty($title)) : ?>
                        <span class="title--extra mgb-1_5"><?=$title; ?></span>
                    <?php endif; ?>
                    <?php if(!empty($link)) : ?>
                        <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button--blue"><?=$link_title; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();