<?php
/**
 * banner.file view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgb-2_5">
    <div class="row">
        <div class="column-12">
            <div class="size-100 pgv-4 flex layout-column align-center-center bg-blue radius-1-rem">
                <?php if($title) : ?>
                    <h3 class="title--big text-white mgb-1_5"><?=$title; ?></h3>
                <?php endif; ?>
                <?php if($file_src) : ?>
                    <a href="<?=$file_src; ?>" target="blank" download class="button--white"><?=$link_title; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>