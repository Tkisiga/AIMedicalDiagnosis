<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class rolesResource extends JsonResource
{
   
    public function toArray($request)
    {
        return [
            'title'=>$this->title,
            'updated_by'=>$this->updated_by
        ];
    }
}
