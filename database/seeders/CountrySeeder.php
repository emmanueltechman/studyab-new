<?php

namespace Database\Seeders;
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $countries = [
             [
                'name' => 'United Kingdom',
                'code' => 'UK',
                'currency' => 'GBP',
             ],
             [
                'name' => 'United State',
                'code' => 'USA',
                'currency' => 'USD',
             ],
             [
                'name' => 'Canada',
                'code' => 'CA',
                'currency_code' => 'CAD',
             ],
             [
                'name' => 'Australia',
                'code' => 'AU',
                'currency' => 'AUS',
             ],

            ];
            foreach($countries as $id=>$countries){
            $id++;
            $country = Country::create($countries);
            }
    }
}
