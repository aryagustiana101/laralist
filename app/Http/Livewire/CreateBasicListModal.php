<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateBasicListModal extends Component
{
    public $list;
    public $show = false;

    public function mount($list)
    {
        $this->list = $list;
    }

    public function render()
    {
        return view('livewire.create-basic-list-modal');
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
