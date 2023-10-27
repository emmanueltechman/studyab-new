<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewSession
{
    use SerializesModels;

    public $term;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($term)
    {
        $this->term = $term;
    }
}
