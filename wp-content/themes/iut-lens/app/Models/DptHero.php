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
class DptHero extends Model
{
    use FindTrait;

    public function getDatas() {
        $id = \get_the_ID();
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

        return([
            'color'     => \get_field('_dpt_color', $term->taxonomy . '_' . $term->term_id),
            'content'   => \get_field('_dpt_hero_content', $term->taxonomy . '_' . $term->term_id),
        ]);
    }
}