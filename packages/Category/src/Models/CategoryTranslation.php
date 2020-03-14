<?php

namespace Category\Models;

use Illuminate\Database\Eloquent\Model;
use Category\Contracts\CategoryTranslation as CategoryTranslationContract;

/**
 * Class CategoryTranslation
 *
 * @package Category\Models
 *
 * @property-read string $url_path maintained by database triggers
 */
class CategoryTranslation extends Model implements CategoryTranslationContract
{
    public $timestamps = false;

    protected $fillable = ['name', 'description', 'slug', 'meta_title', 'meta_description', 'meta_keywords', 'locale_id'];
}