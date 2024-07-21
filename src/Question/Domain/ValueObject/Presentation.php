<?php

namespace App\Question\Domain\ValueObject;

// From Skadate
//const QUESTION_PRESENTATION_TEXT = 'text';
//const QUESTION_PRESENTATION_TEXTAREA = 'textarea';
//const QUESTION_PRESENTATION_SELECT = 'select';
//const QUESTION_PRESENTATION_FSELECT = 'fselect';
//const QUESTION_PRESENTATION_DATE = 'date';
//const QUESTION_PRESENTATION_BIRTHDATE = 'birthdate';
//const QUESTION_PRESENTATION_AGE = 'age';
//const QUESTION_PRESENTATION_RANGE = 'range';
//const QUESTION_PRESENTATION_LOCATION = 'location';
//const QUESTION_PRESENTATION_CHECKBOX = 'checkbox';
//const QUESTION_PRESENTATION_MULTICHECKBOX = 'multicheckbox';
//const QUESTION_PRESENTATION_RADIO = 'radio';
//const QUESTION_PRESENTATION_URL = 'url';
//const QUESTION_PRESENTATION_PASSWORD = 'password';

enum Presentation: string
{
    case TEXT = 'text';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
    case DATE = 'date';
}
