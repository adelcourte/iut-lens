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
class HpSpeech extends Model
{
    use FindTrait;

    public function getDatas() {
        return([
            'title'         => \get_field('_hp_speech_title'),
            'list'          => \get_field('_hp_speech_list'),
            'quote'         => \get_field('_hp_speech_quote'),
            'author_id'     => \get_field('_hp_speech_author_id'),
        ]);
    }
}