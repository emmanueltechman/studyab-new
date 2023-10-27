<?php

namespace App\Http\Controllers;

use App\Events\NewLevel;
use App\Http\Requests\LevelStoreRequest;
use App\Http\Requests\LevelUpdateRequest;
use App\Jobs\SyncMedia;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $levels = Level::all();

        return view('level.index', compact('levels'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('level.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Level $level)
    {
        return view('level.show', compact('level'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Level $level)
    {
        return view('level.edit', compact('level'));
    }

    /**
     * @param \App\Http\Requests\LevelUpdateRequest $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function update(LevelUpdateRequest $request, Level $level)
    {
        $level->update($request->validated());

        $request->session()->flash('level.id', $level->id);

        return redirect()->route('level.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Level $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Level $level)
    {
        $level->delete();

        return redirect()->route('level.index');
    }

    /**
     * @param \App\Http\Requests\LevelStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LevelStoreRequest $request)
    {
        $level = Level::create($request->validated());

        SyncMedia::dispatch($level);

        event(new NewLevel($level));

        $request->session()->flash('level.message', $level->message);

        return redirect()->route('level.index');
    }
}
