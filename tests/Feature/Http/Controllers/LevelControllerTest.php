<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewLevel;
use App\Jobs\SyncMedia;
use App\Models\Level;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LevelController
 */
class LevelControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $levels = Level::factory()->count(3)->create();

        $response = $this->get(route('level.index'));

        $response->assertOk();
        $response->assertViewIs('level.index');
        $response->assertViewHas('levels');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('level.create'));

        $response->assertOk();
        $response->assertViewIs('level.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $level = Level::factory()->create();

        $response = $this->get(route('level.show', $level));

        $response->assertOk();
        $response->assertViewIs('level.show');
        $response->assertViewHas('level');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $level = Level::factory()->create();

        $response = $this->get(route('level.edit', $level));

        $response->assertOk();
        $response->assertViewIs('level.edit');
        $response->assertViewHas('level');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LevelController::class,
            'update',
            \App\Http\Requests\LevelUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $level = Level::factory()->create();
        $name = $this->faker->name;
        $code = $this->faker->word;

        $response = $this->put(route('level.update', $level), [
            'name' => $name,
            'code' => $code,
        ]);

        $level->refresh();

        $response->assertRedirect(route('level.index'));
        $response->assertSessionHas('level.id', $level->id);

        $this->assertEquals($name, $level->name);
        $this->assertEquals($code, $level->code);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $level = Level::factory()->create();

        $response = $this->delete(route('level.destroy', $level));

        $response->assertRedirect(route('level.index'));

        $this->assertDeleted($level);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\LevelController::class,
            'store',
            \App\Http\Requests\LevelStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $code = $this->faker->word;

        Queue::fake();
        Event::fake();

        $response = $this->post(route('level.store'), [
            'name' => $name,
            'code' => $code,
        ]);

        $levels = Level::query()
            ->where('name', $name)
            ->where('code', $code)
            ->get();
        $this->assertCount(1, $levels);
        $level = $levels->first();

        $response->assertRedirect(route('level.index'));
        $response->assertSessionHas('level.message', $level->message);

        Queue::assertPushed(SyncMedia::class, function ($job) use ($level) {
            return $job->level->is($level);
        });
        Event::assertDispatched(NewLevel::class, function ($event) use ($level) {
            return $event->level->is($level);
        });
    }
}
