<?php

use App\Institution;
use App\User;
use Illuminate\Database\Seeder;
use App\Models\Country;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $country = Country::inRandomOrder()->first();

        foreach(range(1,3) as $id)
        {
            $institution = Institution::create(['name' => 'University of ' .  $faker->unique()->company, 'description' => $faker->paragraph, 'country_id' => $country->id]);
            $institution->addMedia(public_path("img/institutions/institution_$id.png"))->preservingOriginal()->toMediaCollection('logo');
        }
        User::find(2)->update(['institution_id' => 1]);
    }
}
