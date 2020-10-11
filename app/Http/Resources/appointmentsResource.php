<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class appointmentsResource extends JsonResource
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
            'appointment_date'=>$this->appointment_date,
            'appointment_time'=>$this->appointment_time,
            'status'=>$this->status,
            'medical_practitioner_id'=>$this->medical_practitioner_id,
            'updated_by'=>$this->updated_by
        ];
    }
}
