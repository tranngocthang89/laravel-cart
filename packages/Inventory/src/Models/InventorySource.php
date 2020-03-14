<?php

namespace Inventory\Models;

use Illuminate\Database\Eloquent\Model;
use Inventory\Contracts\InventorySource as InventorySourceContract;

class InventorySource extends Model implements InventorySourceContract
{
    protected $guarded = ['_token'];
}