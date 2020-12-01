<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class patientsResource extends JsonResource
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
            'patients_id'=>$this->patients_id,
            'sex'=>$this->sex,
            'age'=>$this->age,
            'lab_results'=>$this->lab_results,
            'updated_by'=>$this->updated_by
        ];
        
    }
}
