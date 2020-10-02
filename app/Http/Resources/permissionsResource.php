<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class permissionsResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'permission_id'=>$this->permission_id,
            'permission'=>$this->permission,
            'updated_by'=>$this->updated_by
        ];
    }
}
