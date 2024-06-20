<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $fillable = [
        'channel_id',
        'channel_name',
        'service_id',
        'service_name',
        'esb_type',
        'service_postman',
    ];

    public function scopeSearch($query, $value){
        $query->where('channel_id','like',"%{$value}%")
        ->orwhere('channel_name','like',"%{$value}%")
        ->orwhere('service_id','like',"%{$value}%")
        ->orwhere('service_name','like',"%{$value}%")
        ;;



    }

    // public function channelid()
    // {
    //     return $this->belongsToMany(ChannelId::class);
    // }
}
