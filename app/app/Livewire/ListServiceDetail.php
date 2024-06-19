<?php

namespace App\Livewire;

use App\Models\serviceList;

use App\Models\ChannelId;

use Livewire\Component;

class ListServiceDetail extends Component
{




    public $id_service = "";
    public $perPage = 10;
    public $modal = false;
    public $selectedService;

    public function mount($id)
    {
        $this->id_service = $id;
    }



    public function openModal($service)
    {
        $this->selectedService = $service;
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
        $this->selectedService = null;
    }


    public function render()
    {
        $channel = ChannelId::findOrFail($this->id_service);
        return view('livewire.service-list', [
            'servicelists' => serviceList::where('id', $this->id_service)->paginate($this->perPage),
            'channel_id'=> $channel->channel_id,
            'channel_name' => $channel->channel_name
        ])->layout('layouts.app');
        return view('livewire.list-service-detail');
    }
}
