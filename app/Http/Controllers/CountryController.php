<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::all();

        return view('country.index', compact('countries'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Country $country
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Country $country)
    {
        return view('country.show', compact('country'));
    }
}
