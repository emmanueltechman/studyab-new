<?php

namespace App\Http\Controllers;

use App\Events\NewApplicationWindow;
use App\Http\Requests\ApplicationWindowStoreRequest;
use App\Http\Requests\ApplicationWindowUpdateRequest;
use App\Jobs\SyncMedia;
use App\Models\ApplicationWindow;
use Illuminate\Http\Request;

class ApplicationWindowController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $applicationWindows = ApplicationWindow::all();

        return view('applicationWindow.index', compact('applicationWindows'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('applicationWindow.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplicationWindow $applicationWindow
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ApplicationWindow $applicationWindow)
    {
        return view('applicationWindow.show', compact('applicationWindow'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplicationWindow $applicationWindow
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ApplicationWindow $applicationWindow)
    {
        return view('applicationWindow.edit', compact('applicationWindow'));
    }

    /**
     * @param \App\Http\Requests\ApplicationWindowUpdateRequest $request
     * @param \App\Models\ApplicationWindow $applicationWindow
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationWindowUpdateRequest $request, ApplicationWindow $applicationWindow)
    {
        $applicationWindow->update($request->validated());

        $request->session()->flash('applicationWindow.id', $applicationWindow->id);

        return redirect()->route('applicationWindow.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplicationWindow $applicationWindow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ApplicationWindow $applicationWindow)
    {
        $applicationWindow->delete();

        return redirect()->route('applicationWindow.index');
    }

    /**
     * @param \App\Http\Requests\ApplicationWindowStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationWindowStoreRequest $request)
    {
        $applicationWindow = ApplicationWindow::create($request->validated());

        SyncMedia::dispatch($application_window);

        event(new NewApplicationWindow($application_window));

        $request->session()->flash('application_window.message', $application_window->message);

        return redirect()->route('application_window.index');
    }
}
