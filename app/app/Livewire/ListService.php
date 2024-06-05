<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\serviceList;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Response;


class ListService extends Component
{

    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $type;
    public $modal = false;


    public $service_desc,$service_endpoint_esb ,$service_endpoint_msr,$service_postman,$selectedService;

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


  public function changeUser($id)
  {
    dd($id);
  }

    // public function render()
    // {
    //     $allservice = serviceList::get();


    //     return view('livewire.service-list',[
    //         'servicelists' =>  serviceList::search($this->search)->paginate($this->perPage)

    //     ])->layout('layouts.app');

    // }


    // public function render()
    // {
    //     $allservice = serviceList::get();

    //     return view('livewire.service-list', [
    //         'servicelists' => serviceList::search($this->search)->paginate($this->perPage)
    //     ])->layout('layouts.app');
    // }


    public function download($id){
        return ['PostmanFileDownload'];
    }

    // public function downloadPostman($id)
    // {
    //     $service = serviceList::findOrFail($id);
    //     $filePath = $service->service_postman;

    //     if (Storage::exists($filePath)) {
    //         $jsonContent = Storage::get($filePath);

    //         $filename = 'service_postman_' . $id . '.json';
    //         $headers = [
    //             'Content-Type' => 'application/json',
    //             'Content-Disposition' => "attachment; filename=\"$filename\"",
    //         ];

    //         return Response::make($jsonContent, 200, $headers);
    //     } else {
    //         return abort(404, 'File not found');
    //     }
    // }

    public function downloadPostman($id)
    {
        return redirect()->to('/download_postman/' . $id);
    }

    public function render()
    {
        $allservice = serviceList::get();

        return view('livewire.service-list', [
            'servicelists' => serviceList::search($this->search)->paginate($this->perPage)
        ])->layout('layouts.app');
    }
}
