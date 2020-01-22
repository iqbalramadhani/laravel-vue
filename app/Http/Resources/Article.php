<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'judul' => $this->title,
            'isi' => $this->body,
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'url' => url('http://bale.web.id'),
        ];
    }
}
