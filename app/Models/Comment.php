<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function author()
{
    return $this->belongsTo(User::class, 'user_id');
}
}

