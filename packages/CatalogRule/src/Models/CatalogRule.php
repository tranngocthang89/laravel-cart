<?php

namespace CatalogRule\Models;

use Illuminate\Database\Eloquent\Model;
use CatalogRule\Contracts\CatalogRule as CatalogRuleContract;
use Core\Models\ChannelProxy;
use Customer\Models\CustomerGroupProxy;

class CatalogRule extends Model implements CatalogRuleContract
{
    protected $fillable = ['name', 'description', 'starts_from', 'ends_till', 'status', 'condition_type', 'conditions',  'end_other_rules', 'action_type', 'discount_amount', 'sort_order'];

    protected $casts = [
        'conditions' => 'array'
    ];

    /**
     * Get the channels that owns the catalog rule.
     */
    public function channels()
    {
        return $this->belongsToMany(ChannelProxy::modelClass(), 'catalog_rule_channels');
    }

    /**
     * Get the customer groups that owns the catalog rule.
     */
    public function customer_groups()
    {
        return $this->belongsToMany(CustomerGroupProxy::modelClass(), 'catalog_rule_customer_groups');
    }
}