<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        return [
            'productName'=> $request->productName,
            'price'=>$request->price,
            'image'=>$request->image,
            'discount'=>$request->discount,
            'desription'=>$request->desription,
            //'soham'=>"developer"
        ];
    }
}
