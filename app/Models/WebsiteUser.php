<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteUser extends Model
{
    use HasFactory;
    protected $table = 'website_user';

    protected $fillable = [
        'website_id',
        'user_id'
    ];

}
