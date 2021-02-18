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
class CourseInfos extends Model
{
    use FindTrait;

    public function getDatas() {
        $id = \get_the_ID();

        return([
            'title'     => \get_field('_course_infos_title', $id),
            'entry'     => \get_field('_course_infos_entry', $id),
            'join'      => \get_field('_course_infos_join', $id),
            'image_id'  => \get_field('_course_infos_image_id', $id),
            'content'   => \get_field('_course_infos_content', $id),
        ]);
    }
}