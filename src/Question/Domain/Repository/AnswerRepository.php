<?php

namespace App\Question\Domain\Repository;

use App\Common\Domain\Repository\Repository;
use App\Question\Domain\Entity\Answer;
use App\Question\Domain\Entity\Profile;
use App\Question\Domain\Entity\Question;

interface AnswerRepository extends Repository
{
    public function getAnswerForQuestion(Question $question, Profile $profile): Answer;
}