<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostmanList extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_postman';

    protected $fillable = [
        'no_postman',
        'service_name',
        'file_postman',
        'service_id'
    ];
}
