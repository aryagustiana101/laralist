<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteBasicListModal extends Component
{
    public $list;
    public $basic;
    public $show = false;
    public $selectedListType;

    public function mount($list, $basic)
    {
        $this->list = $list;
        $this->basic = $basic;
    }

    public function render()
    {
        return view('livewire.delete-basic-list-modal');
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
