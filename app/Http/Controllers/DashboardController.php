<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user_role = auth()->user()->role;
        return view('backend.dashboard')->with(compact('user_role'));
    }

}
