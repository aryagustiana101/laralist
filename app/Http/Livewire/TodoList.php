<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
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
        return view('livewire.todo-list');
    }
}
