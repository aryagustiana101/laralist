<?php

namespace App\Http\Controllers;

use App\Models\ListBody;
use App\Helpers\Constant;
use App\Models\ListHeader;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTodoListRequest;
use App\Http\Requests\UpdateTodoListRequest;

class TodoListController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(ListHeader::class, 'list');
    }

    public function store(StoreTodoListRequest $request, ListHeader $list)
    {
        if ($list->id != Constant::LIST_TYPE['todo']) {
            abort(404);
        }
    }

    public function update(UpdateTodoListRequest $request, ListHeader $list, ListBody $todo)
    {
        if ($list->id != Constant::LIST_TYPE['todo']) {
            abort(404);
        }
    }

    public function destroy(ListHeader $list, ListBody $todo)
    {
        if ($list->id != Constant::LIST_TYPE['todo']) {
            abort(404);
        }
    }
}
