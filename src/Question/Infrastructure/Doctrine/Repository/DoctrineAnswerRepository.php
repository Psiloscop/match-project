<?php

namespace App\Question\Infrastructure\Doctrine\Repository;

use App\Question\Domain\ValueObject\Type;
use App\Question\Infrastructure\Doctrine\Entity\AnswerUInt;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use App\Question\Domain\Entity\Answer;
use App\Question\Domain\Entity\Profile;
use App\Question\Domain\Entity\Question;
use App\Question\Domain\Repository\AnswerRepository;

class DoctrineAnswerRepository implements AnswerRepository
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {}

    public function getAnswerForQuestion(Question $question, Profile $profile): Answer
    {
        $rsm = new ResultSetMappingBuilder($this->entityManager);
        $rsm->addRootEntityFromClassMetadata(Question::class, 'q');
        $rsm->addJoinedEntityFromClassMetadata(
            AnswerUInt::class,
            'qa_uint',
            'q',
            'Question_answers_uint',
            [
                'id' => 'question_id',
                'question_type' => '"' . Type::U_INT->value . '"',
            ]
        );

    }
}