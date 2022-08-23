<?php

namespace App\Http\Controllers;

use App\Models\ListHeader;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $lists = ListHeader::with(['type', 'body'])->where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        return view('dashboard', compact('lists'));
    }
}
