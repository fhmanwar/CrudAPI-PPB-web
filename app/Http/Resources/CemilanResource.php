<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CemilanResource extends JsonResource
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
            'id' => $this->id,
            'nm_brg' => $this->nm_brg,
            'desc' => $this->desc,
            'price' => $this->price,
            'image' => asset('image/upload/cemilan/'.$this->image),
            'joined' => $this->created_at->diffForHumans(),
        ];
    }
}
