<nav class="flex items-center justify-between py-1 px-3 border-b border-gray-100">
    {{-- <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
            <x-application-mark />
        </a>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                <x-nav-link    href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('Blog') }}
                </x-nav-link>
                {{-- <x-nav-link href="{{ route('servicelist') }}" :active="request()->routeIs('servicelist')">
                    {{ __('List Service ID') }}
                </x-nav-link> --}}
            {{-- </div>
        </div>
    </div> --}}

    <div id="nav-right" class="flex items-center md:space-x-6">
        {{-- @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth --}}
        <img style="display: block; margin-left: auto; width: 15%;" src="http://127.0.0.1:8000/storage/posts/thumbnails/esbplaybook.png">
    </div>

</nav>
