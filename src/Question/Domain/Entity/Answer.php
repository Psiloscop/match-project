<?php

namespace App\Question\Domain\Entity;

/**
 * @template T
 */
class Answer
{
    private Profile $profile;
    private $data;

    public function __construct(
        Profile $profile,
        $data
    )
    {
        $this->profile = $profile;
        $this->data = $data;
    }

    public function getProfile(): Profile
    {
        return $this->profile;
    }

    /**
     * @return T
     */
    public function getData()
    {
        return $this->data;
    }
}