<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Tests\Integration\Http\Fixtures\Post;


class PostResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'comments' => CommentResource::collection($this->whenLoaded('comments')), // 'comments' faqat yuklanganida ko'rsatiladi
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }

}
