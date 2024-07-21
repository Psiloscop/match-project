<?php

namespace App\Question\Domain\Entity;

/**
 * @template T
 */
class Answer
{
    public function __construct(
        private readonly Profile $profile,
        private $data
    )
    {}

    public function profile(): Profile
    {
        return $this->profile;
    }

    /**
     * @return T
     */
    public function data()
    {
        return $this->data;
    }
}