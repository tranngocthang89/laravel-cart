<?php

namespace Attribute\Models;

use Illuminate\Database\Eloquent\Model;
use Attribute\Contracts\AttributeOptionTranslation as AttributeOptionTranslationContract;

class AttributeOptionTranslation extends Model implements AttributeOptionTranslationContract
{
    public $timestamps = false;

    protected $fillable = ['label'];
}