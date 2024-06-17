

<x-app-layout>
    {{-- <article class="w-full col-span-4 py-5 mx-auto mt-10 md:col-span-3" style="max-width:700px">
        <div class="mb-10 w-full">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Channel</h2>
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        @foreach ($channelIds as $channel)
                            <x-posts.post-cardchannel :channel="$channel" class="md:col-span-1 col-span-3" />
                        @endforeach
                    </div>
                </div>
                <div class="mt-4">
                    {{ $channelIds->links() }} <!-- Render the pagination links -->
                </div>
                {{-- <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                   href="{{ route('blog.index') }}">More Posts</a> --}}
                {{-- <div class="flex items-center mt-4">
                    <span class="mr-2 text-gray-500">{{ $latestUpdatedAt->diffForHumans() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                         stroke="currentColor" class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </article> --}}


        {{-- <div class="px-3 py-6 lg:px-7">
            <div class="flex items-center justify-between border-b border-gray-100">
                <div class="text-gray-600">
                    @if ($search)
                        <a href="{{ route('posts.data') }}" class="mr-3 text-xs text-gray-500">X</a>
                    @endif
                    @if ($search)
                        <span class="ml-2">
                            containing : <strong>{{ $search }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="py-4">
                @foreach ($channelIds as $channel)
                    <x-posts.post-cardchannel :channel="$channel" class="md:col-span-1 col-span-3" />
                @endforeach
            </div>
            <div class="my-3">
                {{ $channelIds->onEachSide(1)->links() }}
            </div>
        </div> --}}

            <div class="px-3 py-6 lg:px-7">
                <!-- Search Form -->
                <form method="GET" action="{{ route('posts.data') }}">
                    <input type="text" name="search" value="{{ $search }}" placeholder="Search channels"
                        class="border border-gray-300 rounded py-2 px-3 mb-4">
                    <button type="submit" class="py-2 px-4 bg-yellow-500 text-white rounded">Search</button>
                </form>

                <div class="flex items-center justify-between border-b border-gray-100">
                    <div class="text-gray-600">
                        @if ($search)
                            <a href="{{ route('posts.clear-filters') }}" class="mr-3 text-xs text-gray-500">X</a>
                            <span class="ml-2">
                                containing : <strong>{{ $search }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-4 mt-4">
                    @foreach ($channelIds as $channel)
                        <x-posts.post-cardchannel :channel="$channel" class="col-span-1" />
                    @endforeach
                </div>

                <div class="my-3">
                    {{ $channelIds->onEachSide(1)->links() }}
                </div>
            </div>


</x-app-layout>


