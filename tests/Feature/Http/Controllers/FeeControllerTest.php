<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\Newfee;
use App\Jobs\SyncMedia;
use App\Models\Fee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FeeController
 */
class FeeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $fees = Fee::factory()->count(3)->create();

        $response = $this->get(route('fee.index'));

        $response->assertOk();
        $response->assertViewIs('fee.index');
        $response->assertViewHas('fees');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('fee.create'));

        $response->assertOk();
        $response->assertViewIs('fee.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $fee = Fee::factory()->create();

        $response = $this->get(route('fee.show', $fee));

        $response->assertOk();
        $response->assertViewIs('fee.show');
        $response->assertViewHas('fee');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $fee = Fee::factory()->create();

        $response = $this->get(route('fee.edit', $fee));

        $response->assertOk();
        $response->assertViewIs('fee.edit');
        $response->assertViewHas('fee');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FeeController::class,
            'update',
            \App\Http\Requests\FeeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $fee = Fee::factory()->create();
        $application_fee = $this->faker->randomFloat(/** decimal_attributes **/);
        $living_expenses = $this->faker->randomFloat(/** decimal_attributes **/);
        $local_tuition = $this->faker->randomFloat(/** decimal_attributes **/);
        $int_tuition = $this->faker->randomFloat(/** decimal_attributes **/);

        $response = $this->put(route('fee.update', $fee), [
            'application_fee' => $application_fee,
            'living_expenses' => $living_expenses,
            'local_tuition' => $local_tuition,
            'int_tuition' => $int_tuition,
        ]);

        $fee->refresh();

        $response->assertRedirect(route('fee.index'));
        $response->assertSessionHas('fee.id', $fee->id);

        $this->assertEquals($application_fee, $fee->application_fee);
        $this->assertEquals($living_expenses, $fee->living_expenses);
        $this->assertEquals($local_tuition, $fee->local_tuition);
        $this->assertEquals($int_tuition, $fee->int_tuition);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $fee = Fee::factory()->create();

        $response = $this->delete(route('fee.destroy', $fee));

        $response->assertRedirect(route('fee.index'));

        $this->assertDeleted($fee);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FeeController::class,
            'store',
            \App\Http\Requests\FeeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $application_fee = $this->faker->randomFloat(/** decimal_attributes **/);
        $living_expenses = $this->faker->randomFloat(/** decimal_attributes **/);
        $local_tuition = $this->faker->randomFloat(/** decimal_attributes **/);
        $int_tuition = $this->faker->randomFloat(/** decimal_attributes **/);

        Queue::fake();
        Event::fake();

        $response = $this->post(route('fee.store'), [
            'application_fee' => $application_fee,
            'living_expenses' => $living_expenses,
            'local_tuition' => $local_tuition,
            'int_tuition' => $int_tuition,
        ]);

        $fees = Fee::query()
            ->where('application_fee', $application_fee)
            ->where('living_expenses', $living_expenses)
            ->where('local_tuition', $local_tuition)
            ->where('int_tuition', $int_tuition)
            ->get();
        $this->assertCount(1, $fees);
        $fee = $fees->first();

        $response->assertRedirect(route('fee.index'));
        $response->assertSessionHas('fee.message', $fee->message);

        Queue::assertPushed(SyncMedia::class, function ($job) use ($fee) {
            return $job->fee->is($fee);
        });
        Event::assertDispatched(Newfee::class, function ($event) use ($fee) {
            return $event->fee->is($fee);
        });
    }
}
