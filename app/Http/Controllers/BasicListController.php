<?php

namespace App\Http\Controllers;

use App\Models\ListBody;
use App\Helpers\Constant;
use App\Models\ListHeader;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBasicListRequest;
use App\Http\Requests\UpdateBasicListRequest;

class BasicListController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ListHeader::class, 'list');
    }

    public function store(StoreBasicListRequest $request, ListHeader $list)
    {
        if ($list->id != Constant::LIST_TYPE['basic']) {
            abort(404);
        }

        ListBody::create([
            ...$request->validated(),
            'list_header_id' => $list->id,
        ]);

        session()->flash('flash.banner', 'Basic list created successfully!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('lists.show', $list);
    }

    public function update(UpdateBasicListRequest $request, ListHeader $list, ListBody $basic)
    {
        if ($list->id != Constant::LIST_TYPE['basic']) {
            abort(404);
        }

        $basic->update($request->validated());

        session()->flash('flash.banner', 'Basic list updated successfully!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('lists.show', $list);
    }

    public function destroy(ListHeader $list, ListBody $basic)
    {
        if ($list->id != Constant::LIST_TYPE['basic']) {
            abort(404);
        }

        $basic->delete();

        session()->flash('flash.banner', 'Basic list deleted successfully!');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('lists.show', $list);
    }
}
