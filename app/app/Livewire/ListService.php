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

    // public function render()
    // {
    //     $search = search::where('service_name','like',"%{$value}%")
    //             ->orwhere('service_endpoint_esb','like',"%{$value}%")
    //             ->orwhere('service_endpoint_msr','like',"%{$value}%");
    //     return view('liveware.search-')

    // }


    public function download($id){
        dd($id);
        // return view('livewire.service-list',[
        //     'servicelists' =>  serviceList::where($id)

        // ]);

    }

}
