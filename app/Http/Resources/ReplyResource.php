<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                "body"=> $this->body,
                "date_creation"=>$this->created_at->diffForHumans(),
                "userName"=> $this->user->name,
                "userEmail"=> $this->user->email
        ];
    }
}
