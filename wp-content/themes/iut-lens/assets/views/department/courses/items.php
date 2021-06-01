<?php
/**
 * department.courses.items view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section>
    <?php if(!empty($courses)) : ?>
        <div class="row align-start-stretch">
            <div class="column-12 mgb-2_5">
                <h2 class="title--big"><?php _e('Formations porposées au sein de ce pôle :', 'iut_lens'); ?></h2>
            </div>
            <?php foreach($courses as $item) : ?>
                <?php if($item['type']['value'] == 'but') : ?>
                    <?php theme_view('department.courses.item', $item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php foreach($courses as $item) : ?>
                <?php if($item['type']['value'] == 'lp') : ?>
                    <?php theme_view('department.courses.item', $item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php foreach($courses as $item) : ?>
                <?php if($item['type']['value'] == 'du') : ?>
                    <?php theme_view('department.courses.item', $item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>