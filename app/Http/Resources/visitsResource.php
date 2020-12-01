<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class visitsResource extends JsonResource
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
            'patient_id'=>$this->patient_id,
            'visit_date'=>$this->visit_date,
            'visit_category'=>$this->visit_category,
            'next_visit'=>$this->next_visit,
            'updated_by'=>$this->updated_by
        ];
    }
}
