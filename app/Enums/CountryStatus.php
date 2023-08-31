<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

class CountryStatus extends Enum
{
    /**
     * Country status is published
     * @var string
     */
    const PUBLISHED = 'published';

    /**
     * Country status is unpublished
     * @var string
     */
    const UNPUBLISHED = 'unpublished';
}
