<?php

namespace CartRule\Models;

use Illuminate\Database\Eloquent\Model;
use CartRule\Contracts\CartRuleCouponUsage as CartRuleCouponUsageContract;

class CartRuleCouponUsage extends Model implements CartRuleCouponUsageContract
{
    public $timestamps = false;
    
    protected $table = 'cart_rule_coupon_usage';

    protected $guarded = ['created_at', 'updated_at'];
}