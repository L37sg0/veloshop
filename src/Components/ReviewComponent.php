<?php

namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('review')]
class ReviewComponent
{
    /** @var string $reviewerEmail */
    public $reviewerEmail;

    /** @var int $rating */
    public $rating;

    /** @var string $comment */
    public $comment;
}