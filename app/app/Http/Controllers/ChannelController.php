<?php

namespace App\Http\Controllers;

use App\Models\ChannelId;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Broadcasting\Channel;

class ChannelController extends Controller
{


    public function index(Request $request)
    {
        $search = $request->session()->get('search');
        $category = $request->session()->get('category');

        $query = ChannelId::query();

        if ($search) {
            $query->where('channel_name', 'like', '%' . $search . '%');
        }

        if ($category) {
            $query->where('title', $category);
        }

        $channelIds = $query->paginate(10);

        return view('posts.data', compact('channelIds', 'search', 'category'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $request->session()->put('search', $search);
        $request->session()->put('category', $category);

        return redirect()->route('posts.data');
    }

    public function clearFilters(Request $request)
    {
        $request->session()->forget(['search', 'category']);

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
