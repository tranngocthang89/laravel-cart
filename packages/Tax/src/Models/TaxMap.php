<?php

namespace Tax\Models;

use Illuminate\Database\Eloquent\Model;
use Tax\Models\TaxCategory;
use Tax\Models\TaxRate;
use Tax\Contracts\TaxMap as TaxMapContract;

class TaxMap extends Model implements TaxMapContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'tax_categories_tax_rates';

    protected $fillable = [
       'tax_category_id', 'tax_rate_id'
    ];

}