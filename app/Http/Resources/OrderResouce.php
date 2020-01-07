<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResouce extends JsonResource
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
            'id_user' => $this->id_user,
            'total' => $this->total,
            'bayar' => $this->bayar,
            'kembalian' => $this->kembalian,
            'joined' => $this->created_at->diffForHumans(),
        ];
    }
}
