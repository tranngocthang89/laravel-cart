<?php

namespace Product\Repositories;

use Core\Eloquent\Repository;
use Product\Repositories\ProductRepository;
use Illuminate\Support\Str;

/**
 * Product Grouped Product Repository
 *
 * @author Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class ProductGroupedProductRepository extends Repository
{
    public function model()
    {
        return 'Product\Contracts\ProductGroupedProduct';
    }

    /**
     * @param array   $data
     * @param Product $product
     * @return void
     */
    public function saveGroupedProducts($data, $product)
    {
        $previousGroupedProductIds = $product->grouped_products()->pluck('id');

        if (isset($data['links'])) {
            foreach ($data['links'] as $linkId => $linkInputs) {
                if (Str::contains($linkId, 'link_')) {
                    $this->create(array_merge([
                            'product_id' => $product->id,
                        ], $linkInputs));
                } else {
                    if (is_numeric($index = $previousGroupedProductIds->search($linkId)))
                        $previousGroupedProductIds->forget($index);

                    $this->update($linkInputs, $linkId);
                }
            }
        }

        foreach ($previousGroupedProductIds as $previousGroupedProductId) {
            $this->delete($previousGroupedProductId);
        }
    }
}