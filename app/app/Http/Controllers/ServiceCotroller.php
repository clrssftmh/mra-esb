<?php

namespace app\Http\Controllers;

use App\Models\ChannelId;
use App\Models\Service;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class ServiceCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'livewire.service-list'
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function downloadPostman($id)
    {
        $service = Service::findOrFail($id);
        $filePath = $service->service_postman; // Adjust the path based on your storage structure

        // Log::info('File path: ' . $filePath);
        // dd($filePath);
        if (Storage::disk('public')->exists($filePath)) {
            $jsonContent = Storage::disk('public')->get($filePath);

            $filename = 'service_postman' . $id . '.json';
            $headers = [
                'Content-Type' => 'application/json',
                'Content-Disposition' => "attachment; filename=\"$filename\"",
            ];

            return Response::make($jsonContent, 200, $headers);
        } else {
            return abort(404, 'File not found');
        }
    }

    // public function listChannel()
    // {

    //     $channels = ChannelId::all(); // Fetch all channels
    //     $latestUpdatedAt = $channels->max('updated_at');

    //     return view('posts.data', compact('channels', 'latestUpdatedAt'));
    // }

}
