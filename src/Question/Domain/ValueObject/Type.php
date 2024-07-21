<?php

namespace App\Question\Domain\ValueObject;

// From Skadate
//const QUESTION_VALUE_TYPE_TEXT = 'text';
//const QUESTION_VALUE_TYPE_SELECT = 'select';
//const QUESTION_VALUE_TYPE_FSELECT = 'fselect';
//const QUESTION_VALUE_TYPE_MULTISELECT = 'multiselect';
//const QUESTION_VALUE_TYPE_DATETIME = 'datetime';
//const QUESTION_VALUE_TYPE_BOOLEAN = 'boolean';

enum Type: string
{
    case U_INT = 'u_int';
    case U_BIGINT = 'u_big_int';
    case STRING = 'string';
    case DATETIME = 'datetime';
    case BOOLEAN = 'boolean';
}
