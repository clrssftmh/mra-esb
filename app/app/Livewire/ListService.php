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
    public $type;
    public $service_desc,$service_endpoint_esb ,$service_endpoint_msr,$service_postman;

  public function changeUser($id)
  {
    dd($id);
  }

    public function render()
    {
        $allservice = serviceList::get();


        return view('livewire.service-list',[
            'servicelists' =>  serviceList::search($this->search)->paginate($this->perPage)

        ])->layout('layouts.app');

    }

<<<<<<< HEAD
=======
    // public function render()
    // {
    //     $search = search::where('service_name','like',"%{$value}%")
    //             ->orwhere('service_endpoint_esb','like',"%{$value}%")
    //             ->orwhere('service_endpoint_msr','like',"%{$value}%");
    //     return view('liveware.search-')

    // }
>>>>>>> 16b2fc229e8f99785f031a633492605832c67a61


    public function download($id){
        dd($id);
        // return view('livewire.service-list',[
        //     'servicelists' =>  serviceList::where($id)

        // ]);

    }

}
