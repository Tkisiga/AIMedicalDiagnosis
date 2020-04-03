<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class medicalPractitionersResource extends JsonResource
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
            'name'=>$this->name,
            'email'=>$this->email,
            'roleID'=>$this->roleID,
            'updated_by'=>$this->updated_by

        ];
    }
}
