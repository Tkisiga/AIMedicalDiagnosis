<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class clinicFindingsResource extends JsonResource
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
            'patient_history_id'=>$this->patient_history_id,
            'general_appearance_id'=>$this->general_appearance_id,
            'physical_examination_id'=>$this->physical_examination_id,
            'updated_by'=>$this->updated_by,
            'created_by'=>$this->created_by,

        ];
    }
}
