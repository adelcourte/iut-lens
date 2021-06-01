<?php
/**
 * contact.hero view.
 * WordPress MVC view.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
?>
<section class="mgt-7_5">
    <div class="row align-spacebetween-start">
        <div class="column-4">
            <?php if($title) : ?>
                <h1 class="title--extra"><?=$title; ?></h1>
            <?php endif; ?>
            <?php if($coords) : ?>
                <div class="flex layout-column">
                    <?php foreach($coords as $coord) : ?>
                        <div class="mgt-2">
                            <span class="title mgb-1"><?=$coord['title']; ?></span>
                            <span><?=$coord['content']; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>