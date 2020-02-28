<?php

Route::apiResource('/question',"QuestionController");

Route::apiResource('/category',"CategoryController");

Route::get('/replybyquestion/{question_id}',"ReplyController@listRepliesByQuestionId");
Route::apiResource('/reply',"ReplyController");

Route::post('/like/{reply}','LikesController@likeIt');
Route::delete('/like/{reply}','LikesController@dislike');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
