<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubscriptionTypes;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class Subscription extends Model
{
    //
    public function subscriptionType()
    {
//        return SubscriptionTypes::find($this->subscription_type_id);
        return $this->hasOne(SubscriptionTypes::class,'subscription_type_id','id');
    }

}
