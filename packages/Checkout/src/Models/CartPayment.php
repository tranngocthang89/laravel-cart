<?php

namespace Checkout\Models;

use Illuminate\Database\Eloquent\Model;
use Checkout\Contracts\CartPayment as CartPaymentContract;

class CartPayment extends Model implements CartPaymentContract
{
    protected $table = 'cart_payment';
}