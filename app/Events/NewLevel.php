<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewLevel
{
    use SerializesModels;

    public $level;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($level)
    {
        $this->level = $level;
    }
}
