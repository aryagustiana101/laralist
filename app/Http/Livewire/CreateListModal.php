<?php

namespace App\Http\Livewire;

use App\Models\ListType;
use Livewire\Component;

class CreateListModal extends Component
{
    public $show = false;
    public $selectedListType;

    public function render()
    {
        $listTypes = ListType::orderBy('name', 'asc')->get();

        return view('livewire.create-list-modal', compact('listTypes'));
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
