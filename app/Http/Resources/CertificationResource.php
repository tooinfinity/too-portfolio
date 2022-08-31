<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CertificationResource extends JsonResource
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
            'name' => $this->name,
            'url' => $this->url,
            'started_at' => (string) $this->start_at,
            'ended_at' => (string) $this->ended_at,
            'is_published' => $this->is_published,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user_id' => $this->user_id,
          ];
    }
}
