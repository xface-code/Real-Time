<?php

Route::apiResource('/question',"QuestionController");

Route::apiResource('/category',"CategoryController");

Route::get('/replybyquestion/{question_id}',"ReplyController@listRepliesByQuestionId");
Route::apiResource('/reply',"ReplyController");

// Route::apiResource('/like',"LikesController");

Route::post('/like/{reply}','LikesController@likeIt');
Route::delete('/like/{reply}','LikesController@dislike');