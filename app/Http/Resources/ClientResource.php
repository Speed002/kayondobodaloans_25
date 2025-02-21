<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\MotorResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'nin' => $this->nin,
            'dob' => $this->dob,
            'contact' => $this->contact,
            'occupation' => $this->occupation,
            'residence' => $this->residence,
            'stage_name' => $this->stage_name,
            'date_of_agreement' => $this->date_of_agreement,
            'father_name' => $this->father_name,
            'father_contact' => $this->father_contact,
            'mother_name' => $this->mother_name,
            'mother_contact' => $this->mother_contact,
            'motor' => MotorResource::collection($this->whenLoaded('motor')),

        ];
    }
}
