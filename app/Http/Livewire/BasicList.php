<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BasicList extends Component
{
    public $list;
    public $basic;

    public function mount($list, $basic)
    {
        $this->list = $list;
        $this->basic = $basic;
    }

    public function render()
    {
        return view('livewire.basic-list');
    }
}
