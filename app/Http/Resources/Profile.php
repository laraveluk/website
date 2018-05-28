<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Profile extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'value' => $this->value,
            'name' => $this->whenLoaded('profile_key', function () {
                return $this->profile_key->name;
            }),
            'type' => $this->whenLoaded('profile_key', function () {
                return $this->profile_key->type;
            }),
            'label' => $this->whenLoaded('profile_key', function () {
                return str_replace('_', ' ', title_case($this->profile_key->name));
            }),
            'vueComponent' => $this->whenLoaded('profile_key', function () {
                return strtolower($this->profile_key->type) . '-field';
            })
        ];
    }
}
