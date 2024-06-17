<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ChannelId extends Model
{
    use HasFactory;
    protected $fillable = [
        'channel_id',
        'channel_description',
        'channel_name',
        'updated_at',
        'image'];


    protected $dates = ['created_at', 'updated_at'];

    public function service_list()
    {
        return $this->belongsToMany(serviceList::class);
    }

    public function scopePublished($query)
    {
        $query->where('updated_at', '<=', Carbon::now());
    }


    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->image, 'http');

        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);
    }


}
