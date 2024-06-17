<?php

namespace App\Http\Controllers;

use App\Models\ChannelId;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Broadcasting\Channel;

class ChannelController extends Controller
{
    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    //     $channelIdsQuery = ChannelId::query();

    //     if ($search) {
    //         $channelIdsQuery->where('channel_name', 'like', "%{$search}%");
    //     }

    //     $channelIds = $channelIdsQuery->paginate(10);

    //     $latestUpdatedAt = ChannelId::orderBy('updated_at', 'desc')->first()->updated_at;

    //     return view('posts.data', [
    //         'channelIds' => $channelIds,
    //         'latestUpdatedAt' => $latestUpdatedAt,
    //         'search' => $search,
    //     ]);
    // }

    // public function clearFilters()
    // {
    //     return redirect()->route('posts.data');
    // }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $channelIdsQuery = ChannelId::query();

        if ($search) {
            $channelIdsQuery->where('channel_name', 'like', "%{$search}%");
        }

        $channelIds = $channelIdsQuery->paginate(10);
        $latestUpdatedAt = ChannelId::orderBy('updated_at', 'desc')->first()->updated_at;

        return view('posts.data', [
            'channelIds' => $channelIds,
            'latestUpdatedAt' => $latestUpdatedAt,
            'search' => $search,
        ]);
    }

    public function clearFilters()
    {
        return redirect()->route('posts.data');
    }

    public function show(ChannelId $channel)
    {
        $servicelists = Service::where('channel_name', $channel->channel_name)->paginate(10);

        return view('posts.channelshow', [
            'servicelists' => $servicelists,
        ]);
    }


}
