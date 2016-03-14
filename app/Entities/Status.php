<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'content', 'owner_id'
    ];
}
