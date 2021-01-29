<?php

namespace IUT_Lens\Models;

use WPMVC\MVC\Traits\FindTrait;
use WPMVC\MVC\Models\PostModel as Model;

/**
 * HpSpeech model.
 * WordPress MVC model.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class Hero extends Model
{
    use FindTrait;

    public function getDatas() {
        $id = \get_the_ID();

        return([
            'type'          => \get_field('_hero_type', $id) ? \get_field('_hero_type', $id) : '',
            'uptitle'       => \get_field('_hero_uptitle', $id) ? \get_field('_hero_uptitle', $id) : '',
            'title'         => \get_field('_hero_title', $id) ? \get_field('_hero_title', $id) : '',
            'content'       => \get_field('_hero_content', $id) ? \get_field('_hero_content', $id) : '',
            'link'          => \get_field('_hero_link', $id) ? \get_field('_hero_link', $id) : '',
            'link_vid'      => \get_field('_hero_link_vid', $id) ? \get_field('_hero_link_vid', $id) : '',
            'images_ids'    =>\get_field('_hero_images_ids', $id) ? \get_field('_hero_images_ids', $id) : '',
        ]);
    }
}