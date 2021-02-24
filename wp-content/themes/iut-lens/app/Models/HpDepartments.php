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
class HpDepartments extends Model
{
    use FindTrait;

    public function getDatas() {
        $terms = get_terms([
            'taxonomy'   => 'department',
            'hide_empty' => false,
        ]);

        return([
            'title'     => \get_field('_hp_dpt_title'),
            'content'   => \get_field('_hp_dpt_content'),
            'link'      => \get_field('_hp_dpt_link'),
            'terms'     => $terms,
        ]);
    }
}