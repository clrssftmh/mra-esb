<?php

namespace App\Livewire;
use App\Models\ChannelId;

use Livewire\Component;

class ChannelIdsComponent extends Component
{
    public $channelIds;

    public function mount()
    {
        // Mengambil data dari tabel channel_ids
        $this->channelIds = ChannelId::all();
    }

    public function render()
    {

        return view('livewire.channel-ids-component');
    }
}

