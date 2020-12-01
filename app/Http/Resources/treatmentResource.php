<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class treatmentResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'treatment_id'=>$this->treatment,
            'name'=>$this->name,
            'updated_by'=>$this->updated_by
        ];
    }
}
