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
class HpFields extends Model
{
    use FindTrait;

    public function getDatas() {
        $terms = get_terms([
            'taxonomy'   => 'fields',
            'hide_empty' => false,
        ]);

        return([
            'title'     => \get_field('_hp_fields_title') ? \get_field('_hp_fields_title') : '',
            'content'   => \get_field('_hp_fields_content') ? \get_field('_hp_fields_content') : '',
            'link'      => \get_field('_hp_fields_link') ? \get_field('_hp_fields_link') : '',
            'terms'     => $terms,
        ]);
    }
}