<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{


    public function toArray($request): array
    {

        //  Get language
        $locale = app()->getLocale();

        $data = [

                 'id'=> $this->id,
                 'title'=> $this->getTranslation('title',$locale),
                 'content'=> $this->getTranslation('content',$locale),
                 'description'=> $this->getTranslation('description',$locale),
                 'logos'=> asset($this->logos),
                 'favicon'=> asset($this->favicon),
                 'facebook'=> $this->facebook,
                 'twitter'=> $this->twitter,
                 'linkedin'=> $this->linkedin,
                 'instagram'=> $this->instegram,
                 'created_at'=> $this->created_at,
                 'updated_at'=> $this->updated_at,
                 'deleted_at'=> $this->deleted_at,
                 'user_id'=> $this->user_id,
        ];

        return $data;
    }

}
