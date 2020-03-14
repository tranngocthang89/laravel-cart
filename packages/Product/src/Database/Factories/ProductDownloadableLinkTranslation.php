<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Product\Models\ProductDownloadableLink;
use Product\Models\ProductDownloadableLinkTranslation;

$factory->define(ProductDownloadableLinkTranslation::class, function (Faker $faker) {
    return [
        'locale' => 'en',
        'title' => $faker->word,
        'product_downloadable_link_id' => function () {
            return factory(ProductDownloadableLink::class)->create()->id;
        },
    ];
});
