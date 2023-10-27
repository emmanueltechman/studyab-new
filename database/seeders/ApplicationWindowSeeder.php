<?php

namespace Database\Seeders;

use App\Models\ApplicationWindow;
use Illuminate\Database\Seeder;

class ApplicationWindowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationWindow::factory()->count(5)->create();
    }
}
