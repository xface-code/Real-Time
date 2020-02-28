<?php

namespace App\Http\Controllers;

use App\Model\Likes;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikesController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:api');
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
        $reply->likes()->create(
            [
                //"user_id" => auth()->id(),
                "user_id" => '4'
            ]
        );
    }

    public function dislike(Reply $reply)
    {
        $reply->likes()->where(["user_id"=> '4'])->first()->delete();
    }
}
