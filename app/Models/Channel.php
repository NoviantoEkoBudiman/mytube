<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    public $table = "chanel";
    protected $primaryKey = "channel_id";
    
    protected $fillable = [
        'channel_user_id',
        'channel_name',
        'channel_description'
    ];
}
