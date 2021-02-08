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
class HpOthers extends Model
{
    use FindTrait;

    public function getDatas() {
        return([
            'list'  => \get_field('_hp_others_list') ? \get_field('_hp_others_list') : '',
        ]);
    }
}