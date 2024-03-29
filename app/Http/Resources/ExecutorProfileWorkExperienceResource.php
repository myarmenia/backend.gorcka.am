<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExecutorProfileWorkExperienceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [

                //                  'id' => $this->id,
                // 'executor_profile_id' => $this->executor_profile_id,
                      'working_place' => $this->working_place,
                   'recruitment_data' => $this->recruitment_data,
                     'dismissal_data' => $this->dismissal_data
        ];
    }
}
