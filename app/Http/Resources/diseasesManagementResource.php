<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class diseasesManagementResource extends JsonResource
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
            'disease_id'=>$this->disease_id,
            'management_id'=>$this->management_id,
            'updated_by'=>$this->updated_by,

        ];
    }
}
