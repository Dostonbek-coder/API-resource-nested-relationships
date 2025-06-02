<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'author' => new UserResource($this->whenLoaded('author')), // 'author' faqat yuklanganida ko'rsatiladi
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
