<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewApplicationWindow;
use App\Jobs\SyncMedia;
use App\Models\ApplicationWindow;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ApplicationWindowController
 */
class ApplicationWindowControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $applicationWindows = ApplicationWindow::factory()->count(3)->create();

        $response = $this->get(route('application-window.index'));

        $response->assertOk();
        $response->assertViewIs('applicationWindow.index');
        $response->assertViewHas('applicationWindows');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('application-window.create'));

        $response->assertOk();
        $response->assertViewIs('applicationWindow.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $applicationWindow = ApplicationWindow::factory()->create();

        $response = $this->get(route('application-window.show', $applicationWindow));

        $response->assertOk();
        $response->assertViewIs('applicationWindow.show');
        $response->assertViewHas('applicationWindow');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $applicationWindow = ApplicationWindow::factory()->create();

        $response = $this->get(route('application-window.edit', $applicationWindow));

        $response->assertOk();
        $response->assertViewIs('applicationWindow.edit');
        $response->assertViewHas('applicationWindow');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ApplicationWindowController::class,
            'update',
            \App\Http\Requests\ApplicationWindowUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $applicationWindow = ApplicationWindow::factory()->create();
        $openingDate = $this->faker->dateTime();
        $closingDate = $this->faker->dateTime();

        $response = $this->put(route('application-window.update', $applicationWindow), [
            'openingDate' => $openingDate,
            'closingDate' => $closingDate,
        ]);

        $applicationWindow->refresh();

        $response->assertRedirect(route('applicationWindow.index'));
        $response->assertSessionHas('applicationWindow.id', $applicationWindow->id);

        $this->assertEquals($openingDate, $applicationWindow->openingDate);
        $this->assertEquals($closingDate, $applicationWindow->closingDate);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $applicationWindow = ApplicationWindow::factory()->create();

        $response = $this->delete(route('application-window.destroy', $applicationWindow));

        $response->assertRedirect(route('applicationWindow.index'));

        $this->assertDeleted($applicationWindow);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ApplicationWindowController::class,
            'store',
            \App\Http\Requests\ApplicationWindowStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $openingDate = $this->faker->dateTime();
        $closingDate = $this->faker->dateTime();

        Queue::fake();
        Event::fake();

        $response = $this->post(route('application-window.store'), [
            'openingDate' => $openingDate,
            'closingDate' => $closingDate,
        ]);

        $applicationWindows = ApplicationWindow::query()
            ->where('openingDate', $openingDate)
            ->where('closingDate', $closingDate)
            ->get();
        $this->assertCount(1, $applicationWindows);
        $applicationWindow = $applicationWindows->first();

        $response->assertRedirect(route('application_window.index'));
        $response->assertSessionHas('application_window.message', $application_window->message);

        Queue::assertPushed(SyncMedia::class, function ($job) use ($application_window) {
            return $job->application_window->is($application_window);
        });
        Event::assertDispatched(NewApplicationWindow::class, function ($event) use ($application_window) {
            return $event->application_window->is($application_window);
        });
    }
}
