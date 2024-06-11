<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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




}
