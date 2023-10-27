<?php

use App\Discipline;
use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplines = ['Science', 'Social Science', 'Art'];

        foreach($disciplines as $discipline)
            Discipline::create(['name' => $discipline]);
    }
}
