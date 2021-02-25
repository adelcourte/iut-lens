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
class Banner extends Model
{
    use FindTrait;

    public function getDatas() {
        $id = \get_the_ID();

        return([
            'check'         => \get_field('_banner_check', $id),
            'type'          => \get_field('_banner_type', $id),
            'title'         => \get_field('_banner_title', $id),
            'link'          => \get_field('_banner_link', $id),
            'link_title'    => \get_field('_banner_link_title', $id),
            'file_id'       => \get_field('_banner_file_id', $id),
        ]);
    }
}