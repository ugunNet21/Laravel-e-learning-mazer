<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        return view('frontend.pages.course.index');
    }


    public function show(string $id)
    {
        //
    }


}
