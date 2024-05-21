<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\serviceList;
use Livewire\WithPagination;

class ListService extends Component
{

    use WithPagination;

    public $perPage = 10;
    public $search = '';


    public function render()
    {
         $allservice = serviceList::get();

        return view('livewire.service-list',[
            'servicelists' =>  serviceList::search($this->search)->paginate($this->perPage)

        ]);

    }

    public function download($id){
        dd($id);
        // return view('livewire.service-list',[
        //     'servicelists' =>  serviceList::where($id)

        // ]);

    }

}