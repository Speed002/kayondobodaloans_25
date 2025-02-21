<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MotorResource extends JsonResource
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
            'type' => $this->type,
            'make' => $this->make,
            'color' => $this->color,
            'chasis' => $this->chasis,
            'engine' => $this->engine,
            'condition' => $this->condition,
            'registration' => $this->registration,
            'registered_names' => $this->registered_names,
        ];
    }
}
