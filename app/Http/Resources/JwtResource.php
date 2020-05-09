<?php

namespace App\Http\Resources;

use App\Enums\UserType;
use Illuminate\Http\Resources\Json\JsonResource;

class JwtResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $userTypeKey = $this->token->scopes[0];
        if ($userTypeKey != null) {
            $userTypeValue = UserType::coerce($userTypeKey)->value;
        }
        return [
            'token' => $this->accessToken,
            'usertype' => $userTypeValue ?? -1
        ];
    }
}
