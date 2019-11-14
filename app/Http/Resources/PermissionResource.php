<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
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
            'user_id' => $this->user_id,
            'user' =>  new UserResource($this->whenLoaded('user')),
            'document_id' => $this->document_id,
            'document' =>  new DocumentResource($this->whenLoaded('document')),
            'role_id' => $this->role_id,
            'role' =>  new RoleResource($this->whenLoaded('role')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]
    }
}
