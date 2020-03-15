<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subscription;

class SubscriptionTypes extends Model
{
    //
    public function subscriptions()
    {
        return $this->belongsTo(Subscription::class,'id', 'subscription_type_id');
    }
}
