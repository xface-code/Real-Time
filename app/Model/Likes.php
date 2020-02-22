<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Likes extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }

}
