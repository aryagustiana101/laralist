<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateBasicListModal extends Component
{
    public $list;
    public $basic;
    public $show = false;

    public function mount($list, $basic)
    {
        $this->list = $list;
        $this->basic = $basic;
    }

    public function render()
    {
        return view('livewire.update-basic-list-modal');
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
