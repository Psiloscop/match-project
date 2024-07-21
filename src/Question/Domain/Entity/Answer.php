<?php

namespace App\Question\Domain\Entity;

/**
 * @template T
 */
class Answer
{
    private Profile $profile;

    private Question $question;

    /**
     * @var T
     */
    private $data;

    public function __construct(
        Profile $profile,
        Question $question,
        $data,
    )
    {
        $this->profile = $profile;
        $this->question = $question;
        $this->data = $data;
    }

    public function getProfile(): Profile
    {
        return $this->profile;
    }

    public function getQuestion(): Question
    {
        return $this->question;
    }

    /**
     * @return T
     */
    public function getData()
    {
        return $this->data;
    }
}