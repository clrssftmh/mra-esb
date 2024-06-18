

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
        </div>
    </article> --}}

{{--
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
            </div> --}}

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms="search" type="text"
                                style="padding-left:32px !important "
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-4 mt-4 p-4">
                    @foreach ($channelIds as $channel)
                        <x-posts.post-cardchannel :channel="$channel" class="col-span-1" />
                    @endforeach
                </div>

                <div class="my-3">
                    {{ $channelIds->onEachSide(1)->links() }}
                </div>

            </div>

</x-app-layout>


