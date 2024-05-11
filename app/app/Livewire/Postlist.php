<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Postlist extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    public function setSort($sort) //set var for onclik livewire  parameters
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[On('search1')]
    public function updateSearch($search)
    {
        // dd('tes');
        $this->search = $search;

    }

    #[Computed()]
    public function posts()
    {
        return Post::published()
            ->orderBy('published_at', $this->sort)
            ->where('title', 'like', "%{$this->search}%")
            ->simplePaginate(4);
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
