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
<section>
    <div class="row p-relative z-5 align-center-stretch">
        <?php if(!empty($list)) : ?>
            <?php foreach($list as $item) : ?>
                <?php theme_view('homepage.others.item', $item); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="content-empty pg-2_5 bg-purple radius-br-100 p-absolute top-3 right-minus-1_5"></div>
        <div class="p-absolute right-20 bottom-0 flex align-center-center transY-50-invert">
            <div class="content-empty pg-1_5 bg-orange radius-bl-100"></div>
            <div class="content-empty pg-1_5 bg-orange radius-br-100"></div>
        </div>
    </div>
</section>