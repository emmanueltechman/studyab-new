<?php

namespace App\Http\Controllers;

use App\Events\Newfee;
use App\Http\Requests\FeeStoreRequest;
use App\Http\Requests\FeeUpdateRequest;
use App\Jobs\SyncMedia;
use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fees = Fee::all();

        return view('fee.index', compact('fees'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('fee.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fee $fee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Fee $fee)
    {
        return view('fee.show', compact('fee'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fee $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Fee $fee)
    {
        return view('fee.edit', compact('fee'));
    }

    /**
     * @param \App\Http\Requests\FeeUpdateRequest $request
     * @param \App\Models\Fee $fee
     * @return \Illuminate\Http\Response
     */
    public function update(FeeUpdateRequest $request, Fee $fee)
    {
        $fee->update($request->validated());

        $request->session()->flash('fee.id', $fee->id);

        return redirect()->route('fee.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fee $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Fee $fee)
    {
        $fee->delete();

        return redirect()->route('fee.index');
    }

    /**
     * @param \App\Http\Requests\FeeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeStoreRequest $request)
    {
        $fee = Fee::create($request->validated());

        SyncMedia::dispatch($fee);

        event(new Newfee($fee));

        $request->session()->flash('fee.message', $fee->message);

        return redirect()->route('fee.index');
    }
}
