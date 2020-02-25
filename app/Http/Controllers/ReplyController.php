<?php

namespace App\Http\Controllers;

use App\Model\Likes;
use App\Model\Reply;
use App\Model\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ReplyResource;

class ReplyController extends Controller
{

    public function index()
    {
        return ReplyResource::collection(Reply::latest()->get());
    }

    public function listRepliesByQuestionId(Request $request)
    {
        return ReplyResource::collection(Question::find($request->question_id)->replies);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reply::create($request->all());
        return response("Created",Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
       return new ReplyResource($reply);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        $reply->update($request->all());
        return response("Udpated",Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        $likes = Likes::where('reply_id',$reply->id)->get();
        foreach ($likes as $like) {
            $like->delete();
        }
        $reply->delete();
        return response("OK",Response::HTTP_ACCEPTED);

    }
}
