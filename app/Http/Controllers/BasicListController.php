<?php

namespace App\Http\Controllers;

use App\Helpers\Constant;
use App\Models\ListHeader;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBasicListRequest;
use App\Models\ListBody;

class BasicListController extends Controller
{
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
