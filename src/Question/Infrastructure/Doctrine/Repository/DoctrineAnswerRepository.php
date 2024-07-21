<?php

namespace App\Question\Infrastructure\Doctrine\Repository;

use App\Question\Domain\Entity\Answer;
use App\Question\Domain\Entity\Profile;
use App\Question\Domain\Entity\Question;
use App\Question\Domain\Repository\AnswerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

class DoctrineAnswerRepository implements AnswerRepository
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {}

    public function getAnswerForQuestion(Question $question, Profile $profile): Answer
    {
        $rsm = new ResultSetMappingBuilder($this->entityManager);
        $rsm->addRootEntityFromClassMetadata(Answer::class, 'a');
        $rsm->addJoinedEntityFromClassMetadata('MyProject\Address', 'a', 'u', 'address', array('id' => 'address_id'));

    }
}