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
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'other_name'=>$this->other_name,
            'gender'=>$this->gender,
            'age'=>$this->age,
            'address'=>$this->address,
            'join_date'=>$this->join_date,
            'phone_number'=>$this->phone_number,
            'updated_by'=>$this->updated_by
        ];
        
    }
}
