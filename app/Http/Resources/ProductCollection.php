<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "id" => $this->id,
            "memory" => $this->memory,
            "storage" => $this->storage,
            "os" => $this->os,
            "displayDiagonal" => $this->display_diagonal,
            "company" => $this->company,
            "color" => $this->color,
        ];
    }
}
