<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChannelId;
use Illuminate\Broadcasting\Channel;

class ChannelController extends Controller
{
    // public function index()
    // {
    //     return view(
    //         'channels.index',
    //         [
    //             'categories' => Category::whereHas('posts', function ($query) {
    //                 $query->published();
    //             })->take(10)->get()
    //         ]
    //     );
    // }

    // public function show(Channel $channel)
    // {
    //     return view(
    //         'channels.show',
    //         [
    //             'channel' => $channel
    //         ]
    //     );
    // }

    //     public function show(ChannelId $channel)
    // {
    //     return view('livewire.service-list', ['channel' => $channel]);
    // }
}
