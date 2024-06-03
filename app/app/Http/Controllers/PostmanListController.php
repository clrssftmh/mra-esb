<?php

namespace App\Http\Controllers;

use App\Models\PostmanList;
use Illuminate\Http\Request;

class PostmanListController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
//
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
    // public function show(string $service_id)
    // {
    //     // Set header content-type
    //     header('Content-Type: application/json; charset=utf-8');
    //     header('Content-Disposition: attachment; filename=postman_file.json');

    //     return PostmanList::find($service_id);
    // }

    public function show(string $service_id)
    {
        // Fetch the data from the database using the service_id
        $postmanData = PostmanList::where('service_id', $service_id)->first();

        if (!$postmanData) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        // Convert the data to JSON
        $jsonData = $postmanData->toJson();

        // Set headers and return the response for file download
        return response($jsonData)
            ->header('Content-Type', 'application/json; charset=utf-8')
            ->header('Content-Disposition', 'attachment; filename=postman_file.json');
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
}

