<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
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
            'degree_name' => $this->degree_name,
            'institute_name' => $this->institute_name,
            'started_at' => (string) $this->started_at,
            'ended_at' => (string) $this->ended_at,
            'is_completed' => $this->is_completed,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user_id' => $this->user_id,
          ];
    }
}
