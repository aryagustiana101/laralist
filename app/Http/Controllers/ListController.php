<?php

namespace App\Http\Controllers;

use App\Helpers\Constant;
use App\Models\ListHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreListRequest;

class ListController extends Controller
{
    public function store(StoreListRequest $request)
    {
        ListHeader::create([
            ...$request->validated(),
            'user_id' => Auth::id(),
            'all_completed' => $request->list_type_id == Constant::LIST_TYPE['basic'] ? null : false,
        ]);

        session()->flash('flash.banner', 'List created successfully!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}