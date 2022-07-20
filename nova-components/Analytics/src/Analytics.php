<?php

namespace Acme\Analytics;

use App\Models\User;
use Laravel\Nova\Card;

class Analytics extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * The height strategy of the card (fixed or dynamic).
     *
     * @var string
     */
    public $height = 'fixed';

    public function allUsers()
    {
        return $this->withMeta(['allUsers' => User::all()]);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'analytics';
    }
}
