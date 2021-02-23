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
class CourseSkills extends Model
{
    use FindTrait;

    public function getDatas() {
        $id = \get_the_ID();

        return([
            'title'     => \get_field('_course_skills_title', $id),
            'list'      => \get_field('_course_skills_list', $id),
        ]);
    }
}