<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Profile as ProfileResource;
use App\Http\Resources\Promotion as PromotionResource;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\SocialLinks as SocialLinksResource;

class User extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'location' => $this->location,
            'avatar' => $this->avatar,
            'nickname' => $this->nickname,
            'slug' => $this->slug,
            'fields' => ProfileResource::collection($this->whenLoaded('profiles')),
            'links' => SocialLinksResource::collection($this->whenLoaded('socialLinks')),
            'posts' => PostResource::collection($this->whenLoaded('posts')),
            'promotions' => PromotionResource::collection($this->whenLoaded('promotions')),
        ];
    }
}
