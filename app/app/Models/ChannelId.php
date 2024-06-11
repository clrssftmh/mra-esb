<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ChannelId extends Model
{
    use HasFactory;
    protected $fillable = [
        'channel_id',
        'channel_description',
        'channel_name',
        'image'];

        public function service_list()
    {
        return $this->belongsToMany(serviceList::class);
    }

    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }


}
