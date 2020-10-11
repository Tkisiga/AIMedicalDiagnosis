<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ageGroupResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'age'=>$this->age,
            'updated_by'=>$this->updated_by
        ];
    }
}
