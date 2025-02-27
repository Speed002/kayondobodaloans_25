<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DateTimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'human' => $this->diffForHumans(),
            'datetime' => $this->toDateTimeString(),
            'time' => $this->format('h:i A') // This will return the time in AM/PM format
        ];
    }
}
