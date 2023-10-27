<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class NewModeOfStudy
{
    use SerializesModels;

    public $mode_of_study;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($mode_of_study)
    {
        $this->mode_of_study = $mode_of_study;
    }
}
