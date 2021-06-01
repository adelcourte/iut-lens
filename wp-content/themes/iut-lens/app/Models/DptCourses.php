<?php

namespace IUT_Lens\Models;

use WPMVC\MVC\Traits\FindTrait;
use WPMVC\MVC\Models\PostModel as Model;

use WP_Query;

/**
 * HpSpeech model.
 * WordPress MVC model.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package iut_lens
 * @version 1.0.0
 */
class DptCourses extends Model
{
    use FindTrait;

    public function getDatas() {
        $courses = new WP_Query([
            'post_type'     => 'course',
            'status'        => 'publish',
        ]);

        return([
            'term_id'   => $term_id,
            'courses'   => $courses
        ]);
    }
}