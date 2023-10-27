<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Country;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CountryController
 */
class CountryControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $countries = Country::factory()->count(3)->create();

        $response = $this->get(route('country.index'));

        $response->assertOk();
        $response->assertViewIs('country.index');
        $response->assertViewHas('countries');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $country = Country::factory()->create();

        $response = $this->get(route('country.show', $country));

        $response->assertOk();
        $response->assertViewIs('country.show');
        $response->assertViewHas('country');
    }
}
