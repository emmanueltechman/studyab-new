<?php

namespace App\Http\Controllers;

use App\Events\NewSession;
use App\Http\Requests\TermStoreRequest;
use App\Http\Requests\TermUpdateRequest;
use App\Jobs\SyncMedia;
use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $terms = Term::all();

        return view('term.index', compact('terms'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('term.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Term $term
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Term $term)
    {
        return view('term.show', compact('term'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Term $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Term $term)
    {
        return view('term.edit', compact('term'));
    }

    /**
     * @param \App\Http\Requests\TermUpdateRequest $request
     * @param \App\Models\Term $term
     * @return \Illuminate\Http\Response
     */
    public function update(TermUpdateRequest $request, Term $term)
    {
        $term->update($request->validated());

        $request->session()->flash('term.id', $term->id);

        return redirect()->route('term.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Term $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Term $term)
    {
        $term->delete();

        return redirect()->route('term.index');
    }

    /**
     * @param \App\Http\Requests\TermStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TermStoreRequest $request)
    {
        $term = Term::create($request->validated());

        SyncMedia::dispatch($term);

        event(new NewSession($term));

        $request->session()->flash('term.message', $term->message);

        return redirect()->route('term.index');
    }
}
