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
class News extends Model
{
    use FindTrait;

    public function getDatas() {
        return([
            'title'         => \get_field('_news_title', 'option') ? \get_field('_news_title', 'option') : '',
            'link_single'   => \get_field('_news_link_single', 'option') ? \get_field('_news_link_single', 'option') : '',
            'link'          => \get_field('_news_link', 'option') ? \get_field('_news_link', 'option') : '',
        ]);
    }
}