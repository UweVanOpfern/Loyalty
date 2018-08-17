<?php

namespace App\Http\Resources\Transaction;

use Illuminate\Http\Resources\Json\Resource;

class TransactionCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'user'  => $this->murugo_user_id,
            'program' => $this->program_id,
            'points' => $this->points_awarded,
            'href' =>['link' => route('transactions.show',$this->id)]
        ];
    }
}
