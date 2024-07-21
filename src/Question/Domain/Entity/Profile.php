<?php

namespace App\Question\Domain\Entity;

use App\Question\Domain\ValueObject\ProfileId;

class Profile
{
    private ProfileId $id;

    private function __construct(
        ProfileId $id
    )
    {
        $this->id = $id;
    }

    public static function create(
        ProfileId $id
    ): Profile
    {
        return new self($id);
    }

    public function getId(): ProfileId
    {
        return $this->id;
    }
}