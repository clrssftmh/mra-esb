<div>
    @foreach ($channelIds as $channel)
        <x-posts.post-cardchannel :channel="$channel" class="md:col-span-1 col-span-3" />
    @endforeach
</div>
