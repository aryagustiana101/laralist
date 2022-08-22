<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $lists = Auth::user()->lists()->with(['type', 'body'])->get();

        return view('dashboard', compact('lists'));
    }
}
