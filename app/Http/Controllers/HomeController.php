<?php

namespace App\Http\Controllers;

use App\Models\Cinema\Film;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $films = Film::orderBy('created_at','desc')->get();
        return view('public.welcome', compact('films'));
    }
}
