<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class Newfee
{
    use SerializesModels;

    public $fee;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($fee)
    {
        $this->fee = $fee;
    }
}
