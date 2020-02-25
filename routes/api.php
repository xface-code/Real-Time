<?php

Route::apiResource('/question',"QuestionController");

Route::apiResource('/category',"CategoryController");

Route::get('/replybyquestion/{question_id}',"ReplyController@listRepliesByQuestionId");
Route::apiResource('/reply',"ReplyController");

Route::post('/like/{reply_id}','LikesController@likeIt');
Route::delete('/like/{reply_id}','LikesController@dislike');