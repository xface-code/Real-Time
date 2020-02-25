<?php

namespace App\Model;


use App\User;
use App\Model\Reply;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $fillable=["user_id"];

    public function replies(){
        return $this->belongsTo(Reply::class);
    }
}
