<?php

namespace App\Http\Controllers;

use App\Events\NewModeOfStudy;
use App\Http\Requests\ModeOfStudyStoreRequest;
use App\Http\Requests\ModeOfStudyUpdateRequest;
use App\Jobs\SyncMedia;
use App\Models\ModeOfStudy;
use Illuminate\Http\Request;

class ModeOfStudyController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $modeOfStudies = ModeOfStudy::all();

        return view('modeOfStudy.index', compact('modeOfStudies'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('modeOfStudy.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ModeOfStudy $modeOfStudy
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ModeOfStudy $modeOfStudy)
    {
        return view('modeOfStudy.show', compact('modeOfStudy'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ModeOfStudy $modeOfStudy
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ModeOfStudy $modeOfStudy)
    {
        return view('modeOfStudy.edit', compact('modeOfStudy'));
    }

    /**
     * @param \App\Http\Requests\ModeOfStudyUpdateRequest $request
     * @param \App\Models\ModeOfStudy $modeOfStudy
     * @return \Illuminate\Http\Response
     */
    public function update(ModeOfStudyUpdateRequest $request, ModeOfStudy $modeOfStudy)
    {
        $modeOfStudy->update($request->validated());

        $request->session()->flash('modeOfStudy.id', $modeOfStudy->id);

        return redirect()->route('modeOfStudy.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ModeOfStudy $modeOfStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ModeOfStudy $modeOfStudy)
    {
        $modeOfStudy->delete();

        return redirect()->route('modeOfStudy.index');
    }

    /**
     * @param \App\Http\Requests\ModeOfStudyStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeOfStudyStoreRequest $request)
    {
        $modeOfStudy = ModeOfStudy::create($request->validated());

        SyncMedia::dispatch($mode_of_study);

        event(new NewModeOfStudy($mode_of_study));

        $request->session()->flash('mode_of_study.message', $mode_of_study->message);

        return redirect()->route('mode_of_study.index');
    }
}
