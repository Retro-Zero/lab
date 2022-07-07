<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PDateController;

class HomeController extends Controller
{
    public function index()
    {
        $latest_experiments = DB::table('experiments')->latest()->take(3)->get();
        return view('home', ['latest_experiments' => $latest_experiments]);
    }
}
