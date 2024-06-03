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
    public function show(string $service_id)
    {
        // Set header content-type
        header('Content-Type: application/json; charset=utf-8');
        header('Content-Disposition: attachment; filename="postman_file.json"');
        return PostmanList::find($service_id);
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

