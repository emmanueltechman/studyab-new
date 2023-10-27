<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewModeOfStudy;
use App\Jobs\SyncMedia;
use App\Models\ModeOfStudy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ModeOfStudyController
 */
class ModeOfStudyControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $modeOfStudies = ModeOfStudy::factory()->count(3)->create();

        $response = $this->get(route('mode-of-study.index'));

        $response->assertOk();
        $response->assertViewIs('modeOfStudy.index');
        $response->assertViewHas('modeOfStudies');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('mode-of-study.create'));

        $response->assertOk();
        $response->assertViewIs('modeOfStudy.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $modeOfStudy = ModeOfStudy::factory()->create();

        $response = $this->get(route('mode-of-study.show', $modeOfStudy));

        $response->assertOk();
        $response->assertViewIs('modeOfStudy.show');
        $response->assertViewHas('modeOfStudy');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $modeOfStudy = ModeOfStudy::factory()->create();

        $response = $this->get(route('mode-of-study.edit', $modeOfStudy));

        $response->assertOk();
        $response->assertViewIs('modeOfStudy.edit');
        $response->assertViewHas('modeOfStudy');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ModeOfStudyController::class,
            'update',
            \App\Http\Requests\ModeOfStudyUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $modeOfStudy = ModeOfStudy::factory()->create();
        $name = $this->faker->name;
        $duration = $this->faker->word;

        $response = $this->put(route('mode-of-study.update', $modeOfStudy), [
            'name' => $name,
            'duration' => $duration,
        ]);

        $modeOfStudy->refresh();

        $response->assertRedirect(route('modeOfStudy.index'));
        $response->assertSessionHas('modeOfStudy.id', $modeOfStudy->id);

        $this->assertEquals($name, $modeOfStudy->name);
        $this->assertEquals($duration, $modeOfStudy->duration);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $modeOfStudy = ModeOfStudy::factory()->create();

        $response = $this->delete(route('mode-of-study.destroy', $modeOfStudy));

        $response->assertRedirect(route('modeOfStudy.index'));

        $this->assertDeleted($modeOfStudy);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ModeOfStudyController::class,
            'store',
            \App\Http\Requests\ModeOfStudyStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $duration = $this->faker->word;

        Queue::fake();
        Event::fake();

        $response = $this->post(route('mode-of-study.store'), [
            'name' => $name,
            'duration' => $duration,
        ]);

        $modeOfStudies = ModeOfStudy::query()
            ->where('name', $name)
            ->where('duration', $duration)
            ->get();
        $this->assertCount(1, $modeOfStudies);
        $modeOfStudy = $modeOfStudies->first();

        $response->assertRedirect(route('mode_of_study.index'));
        $response->assertSessionHas('mode_of_study.message', $mode_of_study->message);

        Queue::assertPushed(SyncMedia::class, function ($job) use ($mode_of_study) {
            return $job->mode_of_study->is($mode_of_study);
        });
        Event::assertDispatched(NewModeOfStudy::class, function ($event) use ($mode_of_study) {
            return $event->mode_of_study->is($mode_of_study);
        });
    }
}
