<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewApplicationWindow
{
    use SerializesModels;

    public $application_window;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($application_window)
    {
        $this->application_window = $application_window;
    }
}
