<?php
/**
 * heroes.hero-home view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgt-5">
    <div class="row align-center-center">
        <div class="column-12 md-column-6 align-center-center text-center">
            <span class="title text-gray"><?=$uptitle; ?></span>
            <span class="title title--extra title--extrabold mgb-1"><?=$title; ?></span>
            <p class="mgb-2"><?=$content; ?></p>
            <div>
                <a href="<?=$link_url; ?>" target="<?=$link_target; ?>" class="button button--blue button--blue--shadow"><?=$link_title; ?></a>
            </div>
        </div>
    </div>
</section>