<?php

namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('form')]
class FormComponent
{
    /** @var string $submitText */
    public $submitText;

    /** @var string $actionURL */
    public $actionURL;

    /** @var array $fields */
    public $fields;
}