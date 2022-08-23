<?php

namespace App\Http\Livewire;

use App\Helpers\Constant;
use Livewire\Component;
use App\Models\ListType;

class UpdateListModal extends Component
{

    public $list;
    public $key;
    public $show = false;
    public $selectedListType;
    public $rangeStartTime;
    public $rangeEndTime;

    public function mount($list)
    {
        $this->list = $list;
        $this->key = $list->id;
        $this->selectedListType = $list->type->id;
        $this->rangeStartTime = $list->type->id == Constant::LIST_TYPE['goal'] ? \Carbon\Carbon::parse($list->range_start_time)->format('Y-m-d\TH:i') : '';
        $this->rangeEndTime = $list->type->id == Constant::LIST_TYPE['goal'] ? \Carbon\Carbon::parse($list->range_end_time)->format('Y-m-d\TH:i') : '';
    }

    public function render()
    {
        $list = $this->list;
        $listTypes = ListType::orderBy('name', 'asc')->get();

        return view('livewire.update-list-modal', compact('listTypes', 'list'));
    }

    public function change($listTypeId)
    {
        $this->selectedListType = $listTypeId;
    }

    public function open()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }
}
