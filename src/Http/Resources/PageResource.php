<?php

namespace Pvtl\VoyagerPages\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
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
            'author' => optional($this->authorId)->firstname,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'image' => $this->image,
            'slug' => $this->slug,
            'meta_description' => $this->meta_description,
        ];
    }
}
