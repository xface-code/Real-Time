<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Reply extends Model
{

    // public function getRouteKeyName(){
    //     return 'question_id';
    // }

    protected $fillable= ["body","question_id","user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function likes(){
        return $this->hasMany(Likes::class);
    }
}
