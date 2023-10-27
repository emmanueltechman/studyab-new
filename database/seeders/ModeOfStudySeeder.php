<?php

namespace Database\Seeders;

use App\Models\ModeOfStudy;
use Illuminate\Database\Seeder;

class ModeOfStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModeOfStudy::factory()->count(5)->create();
    }
}
