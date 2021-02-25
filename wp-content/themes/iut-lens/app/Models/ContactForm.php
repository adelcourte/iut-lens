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
class ContactForm extends Model
{
    use FindTrait;

    public function getDatas() {
        return([
            'shortcode'     => \get_field('_contact_shortcode'),
        ]);
    }
}