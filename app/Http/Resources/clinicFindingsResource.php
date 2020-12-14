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
            'symptoms'=>$this->symptoms,
            'updated_by'=>$this->updated_by,
            'created_by'=>$this->created_by,

        ];
    }
}
