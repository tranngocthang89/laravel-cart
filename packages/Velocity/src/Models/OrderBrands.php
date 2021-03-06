<?php

namespace Velocity\Models;

use Illuminate\Database\Eloquent\Model;
use Velocity\Contracts\OrderBrand as OrderBrandContract;
use Attribute\Models\AttributeOptionProxy;
use Category\Models\CategoryProxy;

class OrderBrands extends Model implements OrderBrandContract
{
    
    protected $table = 'order_brands';

    protected $fillable = ['order_item_id','order_id','product_id','brand'];

    public function getBrands() {
        return $this->belongsTo(AttributeOptionProxy::modelClass() , 'brand');
    }

    /**
     * The categories that belong to the product.
     */
    public function categories()
    {
        return $this->belongsToMany(CategoryProxy::modelClass(), 'product_categories','product_id');
    }
    
}