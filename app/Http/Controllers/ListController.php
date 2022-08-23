<?php

namespace App\Http\Controllers;

use App\Helpers\Constant;
use App\Models\ListHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreListRequest;
use App\Http\Requests\UpdateListRequest;

class ListController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ListHeader::class, 'list');
    }

    public function index()
    {
        return redirect()->route('dashboard');
    }

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

    public function show(ListHeader $list)
    {
        return view('list.show', compact('list'));
    }

    public function update(UpdateListRequest $request, ListHeader $list)
    {
        $list->update($request->validated());

        session()->flash('flash.banner', 'List updated successfully!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('dashboard');
    }

    public function destroy(ListHeader $list)
    {
        $list->delete();

        session()->flash('flash.banner', 'List deleted successfully!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('dashboard');
    }
}
