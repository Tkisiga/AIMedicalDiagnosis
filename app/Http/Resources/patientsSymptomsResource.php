<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class patientsSymptomsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'patient_id'=>$this->patient_id,
            'symptom_id'=>$this->symptom_id,
            'updated_by'=>$this->updated_by,

        ];
    }
}
