<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        return view('frontend.pages.event.index');
    }

    public function show(string $id)
    {
        //
    }


}
