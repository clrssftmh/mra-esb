@props(['channel'])

<div {{ $attributes }}>
    <a wire:navigate href="{{ route('channels.show', $channel->id) }}">
        <div>
            <img class="w-full rounded-xl" src="{{ $channel->getThumbnailUrl() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            <a wire:navigate href="{{ route('channels.show', $channel->id) }}"
                class="text-xl font-bold text-gray-900">{{ $channel->channel_name }}</a>
        </div>

    </div>
</div>
