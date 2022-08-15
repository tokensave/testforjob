<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'authors_firstname' => $this->authors_firstname,
            'authors_lastname' => $this->authors_lastname,
            'books' => BookApiAuthorResource::collection($this->books),
            
        ];
    }
}
