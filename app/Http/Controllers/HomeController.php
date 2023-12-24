<?php

namespace App\Http\Controllers;

use App\Course;
use App\Institution;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        //filter by instituition country

        if($request->has('country')){
            $query->whereHas('institution', function ($q) use ($request) {
                $q->where('country_id', $request->country);
            });
        }

        // filter by course name

        if ($request->has('course_name')) {
            $query->where('name', 'like', '%' . $request->course_name . '%');
        }

        $newestCourses = Course::orderBy('id', 'desc')->take(3)->get();
        $randomInstitutions = Institution::inRandomOrder()->take(3)->get();

        return view('front-pages.home', compact(['newestCourses', 'randomInstitutions']));
    }
}
