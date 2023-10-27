<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewSession;
use App\Jobs\SyncMedia;
use App\Models\Term;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TermController
 */
class TermControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $terms = Term::factory()->count(3)->create();

        $response = $this->get(route('term.index'));

        $response->assertOk();
        $response->assertViewIs('term.index');
        $response->assertViewHas('terms');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('term.create'));

        $response->assertOk();
        $response->assertViewIs('term.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $term = Term::factory()->create();

        $response = $this->get(route('term.show', $term));

        $response->assertOk();
        $response->assertViewIs('term.show');
        $response->assertViewHas('term');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $term = Term::factory()->create();

        $response = $this->get(route('term.edit', $term));

        $response->assertOk();
        $response->assertViewIs('term.edit');
        $response->assertViewHas('term');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TermController::class,
            'update',
            \App\Http\Requests\TermUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $term = Term::factory()->create();
        $name = $this->faker->name;
        $period = $this->faker->word;

        $response = $this->put(route('term.update', $term), [
            'name' => $name,
            'period' => $period,
        ]);

        $term->refresh();

        $response->assertRedirect(route('term.index'));
        $response->assertSessionHas('term.id', $term->id);

        $this->assertEquals($name, $term->name);
        $this->assertEquals($period, $term->period);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $term = Term::factory()->create();

        $response = $this->delete(route('term.destroy', $term));

        $response->assertRedirect(route('term.index'));

        $this->assertDeleted($term);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TermController::class,
            'store',
            \App\Http\Requests\TermStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $period = $this->faker->word;

        Queue::fake();
        Event::fake();

        $response = $this->post(route('term.store'), [
            'name' => $name,
            'period' => $period,
        ]);

        $terms = Term::query()
            ->where('name', $name)
            ->where('period', $period)
            ->get();
        $this->assertCount(1, $terms);
        $term = $terms->first();

        $response->assertRedirect(route('term.index'));
        $response->assertSessionHas('term.message', $term->message);

        Queue::assertPushed(SyncMedia::class, function ($job) use ($term) {
            return $job->term->is($term);
        });
        Event::assertDispatched(NewSession::class, function ($event) use ($term) {
            return $event->term->is($term);
        });
    }
}
