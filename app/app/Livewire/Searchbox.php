<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{

    public $search = '';

    public function update()
    {
        $this->dispatch('search1', search: $this->search);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
