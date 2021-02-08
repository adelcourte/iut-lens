<?php
/**
 * homepage.others.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="pgv-7_5">
    <div class="row p-relative z-5 align-center-stretch">
        <?php if(!empty($list)) : ?>
            <?php foreach($list as $item) : ?>
                <?php theme_view('homepage.others.item', $item); ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="content-empty p-absolute height-10 size-35 top-0 right-0 bg-lime radius-tl-50"></div>
    <div class="content-empty p-absolute height-10 size-35 bottom-0 left-0 bg-pink radius-br-50"></div>
</section>